<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * *
 * * @package kians
 */

get_header();
?>

	<main id="primary" class="o-section c-section--main-page pt-0">
		<div class="o-section__wrapper">
			<div class="content-blog">
				<div class="c-breadcrumbs">
					<?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
				</div>
				<div class="c-page u-flex gap-md">
					<section class="c-page__main bg-white c-page__main-content">
						<?php
						while (have_posts()) :
							the_post();
							get_template_part('template-parts/content', get_post_type());
						endwhile;
						?>
					</section>
					<?php get_sidebar(); ?>
				</div>
				<?php if (comments_open() || get_comments_number()) :
					// If comments are open or we have at least one comment, load up the comment template.
					comments_template();
				endif;
				?>
			</div>
		</div>
	</main>
<?php
get_footer();
