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
					echo 'آموزش‌های برق‌آپ پلاس';
				}
				?>
			</h1>
			<div class="course-results u-flex gap-md">
					<?php get_sidebar('courses'); ?>
				<div id="course-results" class="course-results__content c-archive-blog">
					<ul class="u-flex flex-wrap gap-md wrap p-0 items-start">

						<?php
						$paged = get_query_var('paged') ?: 1;

						$args = [
							'post_type' => 'course',
							'posts_per_page' => 6,
							'paged' => $paged,
							'orderby' => 'date',
							'order' => 'DESC',
						];

						$query = new WP_Query($args);

						if ($query->have_posts()) :
							while ($query->have_posts()) : $query->the_post();
								?>
								<li class="item-before">
									<div class="item-before-content u-flex u-flex--column gap-md">
										<a class="c-blog__img u-flex w-100" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('medium_large', ['class' => 'w-100 cover']); ?>
										</a>

										<div class="c-blog__info">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											<p class="clamp"><?php echo wp_trim_words(get_the_excerpt(), 40); ?></p>
										</div>

										<div class="c-btn-read-more u-flex justify-end">
											<a href="<?php the_permalink(); ?>" class="c-btn-primary u-flex items-center">ادامه مطلب</a>
										</div>
									</div>
								</li>
							<?php
							endwhile;
							wp_reset_postdata();
						else :
							echo '<li>هیچ دوره‌ای یافت نشد.</li>';
						endif;
						?>
					</ul>
					<div class="pagination">
						<?php
						echo paginate_links([
							'total' => $query->max_num_pages,
							'current' => $paged,
							'type' => 'list'
						]);
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
