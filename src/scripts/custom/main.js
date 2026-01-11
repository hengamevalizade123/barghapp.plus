/* eslint-env browser */
(function () {
	'use strict';
	document.addEventListener('DOMContentLoaded', function () {
		if (document.querySelector(".faq-item")) {
			const faqs = document.querySelectorAll(".faq-item");
			faqs.forEach(faq => {
				faq.querySelector(".faq-question").addEventListener("click", () => {
					// بستن بقیه آیتم‌ها
					faqs.forEach(item => {
						if (item !== faq) item.classList.remove("active");
					});
					// باز یا بسته کردن آیتم فعلی
					faq.classList.toggle("active");
				});
			});
		}
		window.addEventListener("scroll", function () {
			const header = document.querySelector("#masthead");
			const scrollPosition = window.scrollY;

			if (scrollPosition > 30) {
				header.classList.add("fixed-header");
			} else {
				header.classList.remove("fixed-header");
			}
		});
		// video player
		const video = document.getElementById("myVideo");
		const btn = document.getElementById("playBtn");

		btn.addEventListener("click", function () {
			video.setAttribute("controls", "controls"); // ← کنترل‌ها را فعال کن
			video.play();
			btn.classList.add("hidden");
		});

		video.addEventListener("pause", function () {
			btn.classList.remove("hidden"); // دکمه برگرده
		});

		video.addEventListener("ended", function () {
			btn.classList.remove("hidden"); // وقتی تموم شد
		});
		// support
		console.log("fjgvhfk");
		const callBtn = document.getElementById('callBtn');
		const chatCards = document.getElementById('chatCards');
		callBtn.addEventListener('click', (event) => {
			console.log("fjgvdddddddddddddhfk");
			event.stopPropagation();
			chatCards.classList.toggle('active');
		});
		document.addEventListener('click', (event) => {
			if (!chatCards.contains(event.target) && !callBtn.contains(event.target)) {
				chatCards.classList.remove('active');
			}
		});
	});
	jQuery(document).ready(function ($) {
		// video personal
		$('#personal-pointer').on('click', function () {
			const video = $('.video-explain-personal').get(0);
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

		const $btn = $(".more-toggle");
		$btn.on("click", function () {
			const $parent = $(this).closest(".c-home-desc__content");
			const $moreText = $parent.find(".more-desc");
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
			let steps = $(".c-careers__steps li");
			let i = 0;

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
			const lastSeen = localStorage.getItem('popupSeenTime');
			if (!lastSeen) return true;


			const now = Date.now();
			const diffHours = (now - parseInt(lastSeen)) / (1000 * 60 * 60);
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

			let subMenu = $(this).next('ul');

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
		const home = document.querySelector('body.home');
		if (home) {
			home.classList.add('lcp-loaded');
		}
	}
});


