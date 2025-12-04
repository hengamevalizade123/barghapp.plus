<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kians
 */

?>

<section class="o-section c-section--main-page">
	<div class="o-section__wrapper">
		<div class="c-page bg-white border-radius">
				<div class="c-form">
					<div class="c-form__title u-flex gap-sm items-center page-title u-flex--row">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M3.01001 11.2202V15.7102C3.01001 20.2002 4.81001 22.0002 9.30001 22.0002H14.69C19.18 22.0002 20.98 20.2002 20.98 15.7102V11.2202" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12 12C13.83 12 15.18 10.51 15 8.68L14.34 2H9.66999L8.99999 8.68C8.81999 10.51 10.17 12 12 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M18.31 12C20.33 12 21.81 10.36 21.61 8.35L21.33 5.6C20.97 3 19.97 2 17.35 2H14.3L15 9.01C15.17 10.66 16.66 12 18.31 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M5.63988 12C7.28988 12 8.77988 10.66 8.93988 9.01L9.15988 6.8L9.63988 2H6.58988C3.96988 2 2.96988 3 2.60988 5.6L2.33988 8.35C2.13988 10.36 3.61988 12 5.63988 12Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12 17C10.33 17 9.5 17.83 9.5 19.5V22H14.5V19.5C14.5 17.83 13.67 17 12 17Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>

						<h1 class="sm-title title">
							<?php the_title(); ?>
						</h1>
					</div>

					<div class="c-from__content">
						<div class="wpcf7-response-output wpcf7-alert">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12 9V14" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M12 21.41H5.93999C2.46999 21.41 1.01999 18.93 2.69999 15.9L5.81999 10.28L8.75999 5C10.54 1.79 13.46 1.79 15.24 5L18.18 10.29L21.3 15.91C22.98 18.94 21.52 21.42 18.06 21.42H12V21.41Z" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M11.9945 17H12.0035" stroke="#292D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							در زمان ثبت سفارش دقت کنید که حتما VPN دستگاه‌ خاموش باشد.
						</div>

						<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								the_content();
							}
						}
						?>
					</div>
				</div>
		</div>
	</div>
</section>
