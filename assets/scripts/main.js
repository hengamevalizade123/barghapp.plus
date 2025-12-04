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
  });
  jQuery(document).ready(function ($) {
    $(".tab").on("click", function () {
      $(".tab").removeClass("active"); // حذف حالت فعال از همه تب‌ها
      $(this).addClass("active"); // فعال‌کردن تب کلیک‌شده
      $(".pane").removeClass("active"); // مخفی‌کردن همه‌ی پنل‌ها
      $("#t" + $(this).data("t")).addClass("active"); // نمایش پنل مربوط به تب
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