<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	if (is_front_page() && ($hero = get_field('hero-img'))) :
	?>
<!--		PRELOAD HERO IMAGE -->
	<link
		rel="preload"
		as="image"
		href="https://plus.barghapp.com/wp-content/uploads/2026/01/hero-personal-967x1024.avif"
		imagesrcset="
    https://plus.barghapp.com/wp-content/uploads/2026/01/hero-personal-283x300.avif 300w,
    https://plus.barghapp.com/wp-content/uploads/2026/01/hero-personal-967x1024.avif 1024w"
		imagesizes="100vw"
		fetchpriority="high"
	/>
	<?php endif; ?>

	<!--	search console-->
	<meta name="google-site-verification" content="jWLb2O08HmRedgXbNfzCD5aPDx_0mMZ2tynQO_6nlEM"/>
	<!-- Google Tag Manager -->
	<script>(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start':
					new Date().getTime(), event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5RLB8M9K');</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Google Tag Manager (noscript) -->
<noscript>
	<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5RLB8M9K"
			height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="c-main-header">
			<div class="o-section__wrapper">
				<div class="c-main-header__content u-flex items-center space-between">
					<a class="header-logo u-flex" href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-barghaap-plus.svg"
							 alt="برقآپ">
					</a>
					<nav id="site-navigation" class="main-navigation u-flex items-center">
						<div class="c-header__wrap js-navs">
							<ul class="c-menu u-flex gap-md font-sm p-0">
								<li>
									<a class="<?php if (is_front_page()) echo 'active'; ?> u-flex flex-column" href="/">
										برق‌آپ پلاس
									</a>
								</li>
								<li>
									<a href="#"
									   class="parent-sub-menu items-center u-flex gap-sm u-flex flex-column">
										خدمات ما
										<span class="has-sub-menu"></span>
									</a>
									<ul class="u-flex u-flex--column">
										<li class="has-second-sub-menu">
											<a class="sub-menu second-sub-menu" href="#">کاهش هزینه قبض برق</a>
										</li>
										<li class="has-second-sub-menu"><a class="sub-menu second-sub-menu" href="#">تامین
												برق پایدار</a>
										</li>
										<li><a class="sub-menu second-sub-menu" href="#">گواهی ظرفیت</a></li>
									</ul>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>"
									   href="/contact-us/">
										تماس با ما
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>"
									   href="/about-us/">
										درباره ی ما
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>"
									   href="/faq/">
										سوالات متداول
									</a>
								</li>
								<li>
									<a class="u-flex flex-column <?php if (is_page('about')) echo 'active'; ?>"
									   href="/blog/">
										مجله
										برق‌آپ پلاس
									</a>
								</li>
							</ul>
						</div>
						<div class="c-hamburger">
							<input class="c-hamburger__checkbox js-hamburger" type="checkbox" aria-label="Menu">
							<span class="c-hamburger__icon"></span>
							<span class="c-hamburger__icon"></span>
							<span class="c-hamburger__icon"></span>
						</div>
					</nav>
					<div class="c-main-header__cta u-flex items-center relative justify-end relative">
						<a class="c-gif c-main-header__panel u-flex items-center border-radius gap-sm btn-outline-gradiant relative"
						   href="https://barghapplus.com/" target="_blank">
							<video
								autoplay
								loop
								muted
								playsinline
								style="display:block" class="gif">
								<source src="<?php echo get_template_directory_uri(); ?>/assets/videos/coin.webm" type="video/webm">
							</video>
							<span>
								سودتو حساب کن
							</span>
						</a>
						<a class="c-main-header__panel u-flex items-center border-radius gap-sm btn-primary-gradiant"
						   href="https://barghapplus.com/" target="_blank">
							<svg width="24" height="24" viewBox="0 0 22 21" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
								<path
									d="M8.75 15.17H4.96C1.59 15.17 0.75 14.33 0.75 10.96V4.96C0.75 1.59 1.59 0.75 4.96 0.75H15.49C18.86 0.75 19.7 1.59 19.7 4.96"
									stroke="white" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path d="M8.75 19.6898V15.1699" stroke="white" stroke-width="1.5" stroke-linecap="round"
									  stroke-linejoin="round"></path>
								<path d="M0.75 11.1699H8.75" stroke="white" stroke-width="1.5" stroke-linecap="round"
									  stroke-linejoin="round"></path>
								<path d="M5.49023 19.6899H8.7502" stroke="white" stroke-width="1.5"
									  stroke-linecap="round" stroke-linejoin="round"></path>
								<path
									d="M20.7503 11.0201V16.7301C20.7503 19.1001 20.1603 19.6901 17.7903 19.6901H14.2403C11.8703 19.6901 11.2803 19.1001 11.2803 16.7301V11.0201C11.2803 8.65007 11.8703 8.06006 14.2403 8.06006H17.7903C20.1603 8.06006 20.7503 8.65007 20.7503 11.0201Z"
									stroke="white" stroke-width="1.5" stroke-linecap="round"
									stroke-linejoin="round"></path>
								<path d="M15.9941 16.4697H16.0031" stroke="white" stroke-width="2"
									  stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							<span>
							ورود به سامانه
							</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
