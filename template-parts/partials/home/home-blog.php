<section class="o-section c-section--home-blog relative">
	<div class="o-section__wrapper">
		<div class="c-home-blog u-flex u-flex--column gap-md">
			<div class="c-sec-title txt-center">
				<h2 class="title">

					اخبــــــار و وبــــلاگ برق‌آپ
					پـــــلاس
				</h2>
			</div>
			<ul class="c-home-blog__content p-0 u-flex gap-md">
				<li>
					<div class="c-slider-blogs carousel h-100"
						 data-flickity='{"wrapAround": true, "autoPlay": 25000,"pageDots":false,"prevNextButtons": false,"rightToLeft": true,"cellAlign": "right"}'>
						<?php
						$args = array(
							'post_type' => 'post',
							'posts_per_page' => 8,
							'orderby' => 'date',
							'order' => 'DESC'
						);

						$latest_posts = new WP_Query($args);

						if ($latest_posts->have_posts()) :
							while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
								<div class="carousel-cell w-100">
									<div class="border-box w-100 padding-md u-flex u-flex--column h-100 space-between">
										<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
											<a class="c-blog__img u-flex w-100" href="<?php the_permalink(); ?>">
												<?php
												if (has_post_thumbnail()) :
													$thumb_id = get_post_thumbnail_id();

													$sizes = [
														'thumbnail' => 150,
														'medium' => 300,
														'medium_large' => 768,
														'large' => 1024,
														'full' => 1920,
													];
													$srcset_items = [];
													foreach ($sizes as $size_name => $width) {
														$src = wp_get_attachment_image_url($thumb_id, $size_name);
														if ($src) $srcset_items[] = $src . ' ' . $width . 'w';
													}
													$srcset = implode(', ', $srcset_items);

													$sizes_attr = '(max-width: 480px) 194px,
                       (max-width: 768px) 350px,
                       (max-width: 1024px) 500px,
                       640px';
													echo wp_get_attachment_image(
														$thumb_id,
														'medium_large',
														false,
														[
															'class' => 'w-100 border-radius cover',
															'loading' => 'lazy',
															'alt' => get_the_title(),
															'srcset' => $srcset,
															'sizes' => $sizes_attr,
														]
													);
												endif;
												?>
											</a>
											<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
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
												<div class="c-blog__info u-flex u-flex--column gap-md">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													<p class="clamp m-0 txt-justify"><?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?></p>
												</div>
											</div>
										</div>
										<div class="c-btn-read-more relative items-center u-flex justify-end">
											<a href="<?php the_permalink(); ?>" type="submit"
											   class="c-btn-primary p-0 u-flex items-center">
												<span>ادامه مطلب</span>
											</a>
										</div>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else : ?>
							<div>هیچ مطلبی یافت نشد.</div>
						<?php endif; ?>
					</div>
				</li>
				<li class="flex-1">
					<div class="c-slider-blogs carousel h-100 c-slider-edu"
						 data-flickity='{"wrapAround": true, "autoPlay": 25000,"pageDots":false,"prevNextButtons": false,"rightToLeft": true,"cellAlign": "right"}'>
						<?php
						$args = array(
							'post_type' => 'course',
							'posts_per_page' => 8,
							'orderby' => 'date',
							'order' => 'DESC'
						);

						$latest_posts = new WP_Query($args);

						if ($latest_posts->have_posts()) :
							while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
								<div class="carousel-cell w-100">
									<div class="border-box w-100 padding-md u-flex u-flex--column h-100 space-between">
										<div class="item-before-content u-flex gap-md u-flex--column relative w-100">
											<a class="c-blog__img u-flex w-100" href="<?php the_permalink(); ?>">
												<?php
												if (has_post_thumbnail()) :
													$thumb_id = get_post_thumbnail_id();

													// اندازه‌های استاندارد برای responsive
													$sizes = [
														'thumbnail' => 150,   // خیلی کوچک
														'medium' => 300,   // موبایل کوچک
														'medium_large' => 768,   // موبایل بزرگ / تبلت
														'large' => 1024,  // دسکتاپ معمولی
														'full' => 1920,  // دسکتاپ بزرگ
													];

													// srcset اتوماتیک از این اندازه‌ها
													$srcset_items = [];
													foreach ($sizes as $size_name => $width) {
														$src = wp_get_attachment_image_url($thumb_id, $size_name);
														if ($src) $srcset_items[] = $src . ' ' . $width . 'w';
													}
													$srcset = implode(', ', $srcset_items);

													// sizes برای نمایش درست بر اساس viewport
													$sizes_attr = '(max-width: 480px) 194px,
                       (max-width: 768px) 350px,
                       (max-width: 1024px) 500px,
                       640px';

													// نمایش تصویر
													echo wp_get_attachment_image(
														$thumb_id,
														'medium_large', // fallback src
														false,
														[
															'class' => 'w-100 border-radius cover',
															'loading' => 'lazy',
															'alt' => get_the_title(),
															'srcset' => $srcset,
															'sizes' => $sizes_attr,
														]
													);
												endif;
												?>
											</a>
											<div class="c-home-blog__item-info u-flex gap-md u-flex--column">
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
												<div class="c-blog__info u-flex u-flex--column gap-md">
													<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
													<p class="clamp m-0 txt-justify"><?php echo wp_trim_words(get_the_excerpt(), 50, '...'); ?></p>
												</div>
											</div>
										</div>
										<div class="c-btn-read-more relative items-center u-flex justify-end">
											<a href="<?php the_permalink(); ?>" type="submit"
											   class="c-btn-primary p-0 u-flex items-center">
												<span>ادامه مطلب</span>
											</a>
										</div>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata();
						else : ?>
							<div>هیچ مطلبی یافت نشد.</div>
						<?php endif; ?>
					</div>
				</li>
				<li>
					<div class="c-news">
						<ul class="p-0 m-0 u-flex--column u-flex gap-md">
							<?php
							$args = array(
								'category_name' => 'news',
								'post_type' => 'post',
								'posts_per_page' => 6,
								'orderby' => 'date',
								'order' => 'DESC'
							);

							$latest_posts = new WP_Query($args);

							if ($latest_posts->have_posts()) :
								while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
									<li>
										<a class="border-radius padding-md relative u-flex gap-md u-flex--column"
										   href="<?php the_permalink(); ?>">
											<h3 class="m-0">
												<?php the_title(); ?>
											</h3>
											<p class="m-0">
												<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
											</p>
											<span class="tag absolute">
									خبر
								</span>
										</a>
									</li>
								<?php endwhile;
								wp_reset_postdata();
							else : ?>
								<div>هیچ مطلبی یافت نشد.</div>
							<?php endif; ?>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
.
