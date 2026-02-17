"use strict";

/* eslint-env browser */
(function () {
  'use strict';

  document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector(".faq-item")) {
      var faqs = document.querySelectorAll(".faq-item");
      faqs.forEach(function (faq) {
        faq.querySelector(".faq-question").addEventListener("click", function () {
          // بستن بقیه آیتم‌ها
          faqs.forEach(function (item) {
            if (item !== faq) item.classList.remove("active");
          });
          // باز یا بسته کردن آیتم فعلی
          faq.classList.toggle("active");
        });
      });
    }
    window.addEventListener("scroll", function () {
      var header = document.querySelector("#masthead");
      var scrollPosition = window.scrollY;
      if (scrollPosition > 30) {
        header.classList.add("fixed-header");
      } else {
        header.classList.remove("fixed-header");
      }
    });
    // video player
    if (document.querySelector("#myVideo")) {
      var video = document.getElementById("myVideo");
      var btn = document.getElementById("playBtn");
      btn.addEventListener("click", function () {
        video.setAttribute("controls", "controls"); // ← کنترل‌ها را فعال کن
        video.play();
        btn.classList.add("hidden");
      });
    }
    // support
    var callBtn = document.getElementById('callBtn');
    var chatCards = document.getElementById('chatCards');
    callBtn.addEventListener('click', function (event) {
      event.stopPropagation();
      chatCards.classList.toggle('active');
    });
    document.addEventListener('click', function (event) {
      if (!chatCards.contains(event.target) && !callBtn.contains(event.target)) {
        chatCards.classList.remove('active');
      }
    });
  });
  jQuery(document).ready(function ($) {
    // مصرف خانگی
    $("table.table-collapse").each(function () {
      var $table = $(this);
      // اولین ردیف جدول رو کلاس clickable می‌کنیم
      $table.find("tr:first").addClass("clickable");
      // بقیه ردیف‌ها رو مخفی می‌کنیم و کلاس content می‌دیم
      $table.find("tr:not(:first)").hide().addClass("content");
    });

    // وقتی روی ردیف اول جدول کلیک شد
    $("tr.clickable").click(function () {
      // toggle ردیف‌های بعدی همین جدول با انیمیشن اسلاید
      $(this).nextAll("tr.content").slideToggle();
    });
    // calculator
    $(document).on('click', '.gc-calc-btn', function () {
      var $calculator = $(this).closest('[data-calculator="green-power"]');
      var demandMW = parseFloat($calculator.find('.gc-demand').val());
      var days = parseInt($calculator.find('.gc-days').val());
      var $result = $calculator.find('.c-calculator__result');
      if (isNaN(demandMW) || isNaN(days) || demandMW <= 0 || days <= 0) {
        alert('لطفاً مقادیر معتبر وارد کنید');
        if ($result.is(':visible')) {
          $result.slideUp(400);
        }
        return;
      }

      // 1. کل مصرف (kWh)
      var totalConsumption = demandMW * 1000 * 24 * days;

      // 2. تعهد ۳٪
      var commitment = totalConsumption * 0.03;

      // 3. هزینه‌ها
      var buyCost = commitment * 3800;
      var penaltyCost = commitment * 5800;

      // 4. سود
      var profit = penaltyCost - buyCost;

      // نمایش خروجی
      $calculator.find('.gc-total').text(totalConsumption.toLocaleString());
      $calculator.find('.gc-commitment').text(commitment.toLocaleString());
      $calculator.find('.gc-buy').text(buyCost.toLocaleString());
      $calculator.find('.gc-penalty').text(penaltyCost.toLocaleString());
      $calculator.find('.gc-profit-value').text(profit.toLocaleString());
      $result.slideDown(600);
    });

    // tab price list
    if ($('#year-filter').length && $('#month-filter').length) {
      // آرایه ماه میلادی → ماه شمسی
      var solarMonths = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; // فقط عدد ماه شمسی

      // تاریخ میلادی امروز
      var today = new Date();
      var gy = today.getFullYear();
      var gm = today.getMonth() + 1; // 1..12 میلادی
      var gd = today.getDate();

      // اینجا یک **تقریب ساده**: برای ماه شمسی فعلی می‌تونیم ثابت بگذاریم
      // مثلا برای تست فعلی، فرض می‌کنیم الان بهمن (ماه 11)
      var currentMonth = 11; // اینجا باید به صورت ثابت یا از سرور بگیری
      var currentYear = 1404; // سال فعلی شمسی

      // محاسبه ماه قبل
      var defaultMonth = currentMonth - 1;
      var defaultYear = currentYear;
      if (defaultMonth === 0) {
        defaultMonth = 12;
        defaultYear = currentYear - 1;
      }

      // مقدار پیش‌فرض select
      $('#year-filter').val(defaultYear.toString());
      $('#month-filter').val(defaultMonth.toString().padStart(2, '0'));
      filterTabs();
    }
    $('.tab').click(function () {
      var tabId = $(this).data('tab');
      $('.tab').removeClass('active');
      $('.tab-content').fadeOut(200, function () {
        $('#' + tabId).fadeIn(300).addClass('active').siblings().removeClass('active');
      });
    });
    function filterTabs() {
      var selectedYear = $('#year-filter').val();
      var selectedMonth = $('#month-filter').val() ? $('#month-filter').val().padStart(2, '0') : "";
      if (!selectedYear || !selectedMonth) {
        $('.tab-content').hide();
        return;
      }
      $('.tab-content').each(function () {
        var tabYear = $(this).data('year');
        var tabMonth = $(this).data('month').toString().padStart(2, '0');
        if (tabYear == selectedYear && tabMonth == selectedMonth) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
      var firstVisible = $('.tab-content:visible').first().attr('id');
      if (firstVisible) {
        $('.tab').removeClass('active');
        $('.tab[data-tab="' + firstVisible + '"]').addClass('active');
      }
    }
    $('#year-filter, #month-filter').change(filterTabs);
    // video personal
    $('#personal-pointer').on('click', function () {
      var video = $('.video-explain-personal').get(0);
      if (video) {
        $(video).attr('controls', 'controls');
        video.play();
      }
      $('.play-btn').addClass('hidden');
    });
    $(".tab").on("click", function () {
      var $this = $(this);
      var paneId = "#t" + $this.data("t");
      var isActive = $this.hasClass("active");
      $(".tab").removeClass("active");
      $(".pane").removeClass("active");
      if (!isActive) {
        $this.addClass("active");
        $(paneId).addClass("active");
      }
    });
    var $btn = $(".more-toggle");
    $btn.on("click", function () {
      var $parent = $(this).closest(".c-home-desc__content");
      var $moreText = $parent.find(".more-desc");
      $moreText.stop().slideToggle(500);
      $parent.toggleClass("open");
      if ($parent.hasClass("open")) {
        $(this).text("مشاهده کمتر");
      } else {
        $(this).text("مشاهده بیشتر");
      }
    });
    // همبرگر منو
    var hamburger = document.querySelector('.js-hamburger');
    if (hamburger) {
      var hamburgerMenu = function hamburgerMenu() {
        document.getElementsByTagName('html')[0].classList.toggle('is-fixed');
        document.querySelector('.js-navs').classList.toggle('is-open');
      };
      hamburger.addEventListener('click', hamburgerMenu, false);
    }
    function animateSteps() {
      var steps = $(".c-careers__steps li");
      var i = 0;

      // ریست
      steps.removeClass("active line-active");
      function activate() {
        if (i < steps.length) {
          // فعال کردن دایره
          $(steps[i]).addClass("active");

          // فعال کردن خط قبلی
          if (i > 0) {
            $(steps[i - 1]).addClass("line-active");
          }
          i++;
          setTimeout(activate, 800); // فاصله زمانی بین مراحل
        } else {
          // بعد از اتمام همه مراحل → ریست و شروع از اول
          setTimeout(function () {
            steps.removeClass("active line-active");
            animateSteps();
          }, 2000);
        }
      }
      activate();
    }
    if ($(".c-careers__steps").length) {
      animateSteps();
    }
    $('.faq-question').click(function () {
      var answer = $(this).next('.faq-answer');
      var toggle = $(this).find('.faq-toggle');
      if (answer.is(':visible')) {
        answer.slideUp();
      } else {
        $('.faq-answer').slideUp();
        answer.slideDown();
      }
    });

    // popup
    function shouldShowPopup() {
      var lastSeen = localStorage.getItem('popupSeenTime');
      if (!lastSeen) return true;
      var now = Date.now();
      var diffHours = (now - parseInt(lastSeen)) / (1000 * 60 * 60);
      return diffHours >= 3;
    }
    function showPopup() {
      $('#popup-overlay').fadeIn(300);
      localStorage.setItem('popupSeenTime', Date.now());
    }
    if (shouldShowPopup()) {
      setTimeout(showPopup, 3000);
    }

    // Close on X click
    $('#popup-close').click(function () {
      $('#popup-overlay').fadeOut(250);
    });

    // Close on clicking outside the popup
    $('#popup-overlay').click(function (e) {
      if (e.target.id === 'popup-overlay') {
        $('#popup-overlay').fadeOut(250);
      }
    });

    // Close on clicking outside the popup
    $(document).on('click', function (e) {
      if (!$(e.target).closest('#popup-box').length) {
        $('#popup-overlay').fadeOut(250);
      }
    });
    // زمانی که روی منوی اصلی کلیک می‌شود
    $('.parent-sub-menu').on('click', function (e) {
      e.preventDefault();
      if ($(window).width() >= 768) return;
      var subMenu = $(this).next('ul');
      if (subMenu.hasClass('open')) {
        subMenu.removeClass('open');
      } else {
        $('.c-menu > li > ul.open').removeClass('open');
        subMenu.addClass('open');
      }
    });
  });
})();
// LCP loaded
window.addEventListener('load', function () {
  if (window.matchMedia('(max-width: 767px)').matches) {
    var home = document.querySelector('body.home');
    if (home) {
      home.classList.add('lcp-loaded');
    }
  }
});