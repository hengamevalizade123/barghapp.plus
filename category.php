<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 * *
 * * @package kians
 */

get_header();
?>
	<section class="o-section c-section--main-page pt-0">
		<div class="o-section__wrapper">
			<?php if (function_exists("rank_math_the_breadcrumbs")) rank_math_the_breadcrumbs(); ?>
			<h1 class="title title-left">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M20.5 11.3V7.04001C20.5 3.01001 19.56 2 15.78 2H8.22C4.44 2 3.5 3.01001 3.5 7.04001V18.3C3.5 20.96 4.96001 21.59 6.73001 19.69L6.73999 19.68C7.55999 18.81 8.80999 18.88 9.51999 19.83L10.53 21.18"
						stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					<path
						d="M18.2 21.4C19.9673 21.4 21.4 19.9673 21.4 18.2C21.4 16.4327 19.9673 15 18.2 15C16.4327 15 15 16.4327 15 18.2C15 19.9673 16.4327 21.4 18.2 21.4Z"
						stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					<path d="M22 22L21 21" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
						  stroke-linejoin="round"></path>
					<path d="M8 7H16" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
						  stroke-linejoin="round"></path>
					<path d="M9 11H15" stroke="#292D32" stroke-width="1.5" stroke-linecap="round"
						  stroke-linejoin="round"></path>
				</svg>
				<?php
				if (is_category() || is_tag() || is_tax()) {
					echo single_term_title() . ' برق‌آپ پلاس ';
				} else {
					echo 'مقالات برق‌آپ پلاس';
				}
				?>
			</h1>
			<div class="c-archive-blog">
				<ul class="u-flex flex-wrap gap-md wrap p-0 items-start">
					<?php
					$paged = max( 1, get_query_var('paged'), get_query_var('page') );

					$queried_object = get_queried_object();

					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 6,
						'paged' => $paged,
						'orderby' => 'date',
						'order' => 'DESC',
					);
					if (is_category()) {
						$args['category_name'] = $queried_object->slug;
					}
					$latest_posts = new WP_Query($args);


					if ($latest_posts->have_posts()) :
						while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
							<li class="item-before">
								<div class="item-before-content u-flex u-flex--column gap-md">
									<a class="c-blog__img u-flex w-100" href="<?php the_permalink(); ?>">
										<?php
										if (has_post_thumbnail()) {
											echo wp_get_attachment_image(
												get_post_thumbnail_id(),
												'medium_large',
												false,
												[
													'class' => 'w-100 cover',
													'loading' => 'lazy',
													'alt' => get_the_title()
												]
											);
										}
										?>
									</a>
									<div class="txt-overflow c-blog__meta u-flex gap-sm space-between">
										<p class="m-0 u-flex gap-sm">
											<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
												<path
													d="M20.75 13.25C20.75 18.08 16.83 22 12 22C7.17 22 3.25 18.08 3.25 13.25C3.25 8.42 7.17 4.5 12 4.5C16.83 4.5 20.75 8.42 20.75 13.25Z"
													stroke="#42465399" stroke-width="1.5"
													stroke-linecap="round"
													stroke-linejoin="round"/>
												<path d="M12 8V13" stroke="#42465399" stroke-width="1.5"
													  stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M9 2H15" stroke="#42465399" stroke-width="1.5"
													  stroke-miterlimit="10" stroke-linecap="round"
													  stroke-linejoin="round"/>
											</svg>
											مطالعه :
											<?php echo reading_time() ?>

										</p>
										<p class="m-0 u-flex gap-sm">
											<svg width="18" height="18" viewBox="0 0 24 24" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
												<path d="M8 2V5" stroke="#42465399" stroke-width="1.5"
													  stroke-miterlimit="10" stroke-linecap="round"
													  stroke-linejoin="round"/>
												<path d="M16 2V5" stroke="#42465399" stroke-width="1.5"
													  stroke-miterlimit="10" stroke-linecap="round"
													  stroke-linejoin="round"/>
												<path d="M3.5 9.09H20.5" stroke="#42465399"
													  stroke-width="1.5"
													  stroke-miterlimit="10" stroke-linecap="round"
													  stroke-linejoin="round"/>
												<path
													d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z"
													stroke="#42465399" stroke-width="1.5"
													stroke-miterlimit="10"
													stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M15.6947 13.7H15.7037" stroke="#42465399"
													  stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M15.6947 16.7H15.7037" stroke="#42465399"
													  stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M11.9955 13.7H12.0045" stroke="#42465399"
													  stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M11.9955 16.7H12.0045" stroke="#42465399"
													  stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M8.29431 13.7H8.30329" stroke="#42465399"
													  stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M8.29431 16.7H8.30329" stroke="#42465399"
													  stroke-width="2"
													  stroke-linecap="round" stroke-linejoin="round"/>
											</svg>
											<?php echo get_the_date('j F Y'); ?>
										</p>
									</div>
									<div class="c-blog__info">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										<p class="clamp mb-0 txt-justify"><?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?></p>
									</div>

									<div class="c-btn-read-more relative items-center u-flex justify-end">
										<a href="<?php the_permalink(); ?>" type="submit"
										   class="c-btn-primary p-0 u-flex items-center">
											<span>ادامه مطلب</span>
										</a>
									</div>
								</div>
							</li>
						<?php endwhile;
						wp_reset_postdata();
					else : ?>
						<li>هیچ مطلبی یافت نشد.</li>
					<?php endif; ?>
				</ul>
				<div class="pagination u-flex gap-md justify-center content-center margin-lg-t padding-lg-t">
					<?php
					echo paginate_links(array(
						'total'   => $latest_posts->max_num_pages,
						'current' => $paged,
						'type'    => 'list',
						'prev_text' => __('« قبلی'),
						'next_text' => __('بعدی »'),
						'base' => add_query_arg('page','%#%'),
						'format' => '?page=%#%',
					));
					?>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
