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
	<!--	search console-->
	<meta name="google-site-verification" content="jWLb2O08HmRedgXbNfzCD5aPDx_0mMZ2tynQO_6nlEM"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'starter-theme'); ?></a>
	<header id="masthead" class="site-header">
		<div class="c-main-header">
			<div class="o-section__wrapper">
				<div class="c-main-header__content u-flex items-center space-between">
					<a class="header-logo" href="/">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/barghapp-logo.svg"
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
																				<a class="sub-menu second-sub-menu" href="#">تعرفه برق</a>
																			</li>
																			<li class="has-second-sub-menu"><a class="sub-menu second-sub-menu" href="/retail-electricity/">خرده فروشی برق</a>
																			</li>
																			<li><a class="sub-menu second-sub-menu" href="/قرارداد-دوجانبه-برق/">خرید برق دوجانبه</a></li>
																			<li><a class="sub-menu second-sub-menu" href="/برق-سبز-چیست؟/">خرید برق سبز</a></li>
																			<li><a class="sub-menu second-sub-menu" href="/stock-energy/">خرید برق از بورس انرژی</a></li>
																			<li><a class="sub-menu second-sub-menu" href="#">برق قطع نشو</a></li>
																			<li><a class="sub-menu second-sub-menu" href="/purchase-of-electricity-above-one-megawatt/">خرید برق بالای یک مگاوات</a></li>
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
										مقالات
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
					<div class="c-main-header__cta u-flex items-center">
						<a class="c-main-header__panel u-flex items-center border-radius gap-sm secondary-btn"
						   href="https://barghapplus.com/" target="_blank">
							<svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M8.75 15.17H4.96C1.59 15.17 0.75 14.33 0.75 10.96V4.96C0.75 1.59 1.59 0.75 4.96 0.75H15.49C18.86 0.75 19.7 1.59 19.7 4.96" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M8.75 19.6898V15.1699" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M0.75 11.1699H8.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M5.49023 19.6899H8.7502" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M20.7503 11.0201V16.7301C20.7503 19.1001 20.1603 19.6901 17.7903 19.6901H14.2403C11.8703 19.6901 11.2803 19.1001 11.2803 16.7301V11.0201C11.2803 8.65007 11.8703 8.06006 14.2403 8.06006H17.7903C20.1603 8.06006 20.7503 8.65007 20.7503 11.0201Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M15.9941 16.4697H16.0031" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
						ورود به سامانه
						</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
