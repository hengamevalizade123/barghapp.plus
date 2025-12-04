<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */
?>

<aside class="c-sidebar">
	<div class="c-sidebar__main u-flex u-flex--column gap-lg">
		<div class="c-page__table c-page__access bg-white padding-md border-radius u-flex u-flex--column gap-md">
			<div class="c-table__title">
				<div class="c-table__title-name">
					<h3 class="title-before dot-after dot-after relative">
						مقالات مرتبط
					</h3>
				</div>
			</div>
			<div class="padding-0 c-tabs-content" data-flickity='{ "pageDots": false,"wrapAround": true, "cellAlign": "right", "autoPlay": 500000, "rightToLeft": true,"prevNextButtons": false}'>
				<?php
				$args = array(
					'post_type'      => 'post',
					'posts_per_page' => 6,
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC',
					'no_found_rows'  => true,
					'post__not_in'   => array( get_the_ID())
				);
				$query = new WP_Query($args);

				if ($query->have_posts()):
					while ($query->have_posts()): $query->the_post(); ?>
						<div class="w-100 rel-blog">
							<a class="u-flex u-flex--column gap-sm" href="<?php echo esc_url(get_permalink()); ?>">
								<?php
								if (has_post_thumbnail()) {
									echo get_the_post_thumbnail(get_the_ID(), 'full', array(
										'class' => 'thumb', // استایل‌دهی از طریق CSS
										'alt'   => esc_attr(get_the_title())
									));
								}
								?>
								<span class="font-sm relative color-text">
                                    <?php echo esc_html(get_the_title()); ?>
                                        </span>
							</a>
						</div>
					<?php endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>

		</div>
	</div>
</aside>
