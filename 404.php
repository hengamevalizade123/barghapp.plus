<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Starter_Theme
 */

get_header();
?>
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="o-section__wrapper">
				<div class="page-content padding-lg u-flex items-center u-flex--column">
					<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.8.5/dist/dotlottie-wc.js"
							type="module"></script>
					<dotlottie-wc class="lottie-404" src="https://lottie.host/33fd8ff3-5d54-4425-a815-39b567756c22/EHecAIZNY1.lottie"
								  autoplay loop></dotlottie-wc>
				<div class="error-404-txt u-flex u-flex--column gap-sm">
					<p class="m-0">متاسفانه
						صفحه ای یافت نشد.
					</p>
					<a class="txt-center border-radius" href="/">
						صفحه اصلی
					</a>
				</div>
				</div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
