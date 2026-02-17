<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter_Theme
 */
?>

<aside class="c-sidebar-course w-100">
	<div class="c-sidebar__main u-flex u-flex--column gap-lg padding-md">
		<form id="course-filter" class="course-filter">
			<?php wp_nonce_field('course_filter_nonce', 'nonce'); ?>
			<?php $categories = get_terms([
				'taxonomy' => 'course_cat',
				'hide_empty' => true,
				'parent' => 0
			]);if($categories):?>
			<div class="filter-group u-flex u-flex--column gap-sm">
				<div class="filter-group__title">
					<h4 class="m-0 relative">
						دسته‌بندی آموزش‌ها
					</h4>
				</div>
				<?php
				foreach ($categories as $cat) :
					?>
					<label class="u-flex gap-sm items-center custom-checkbox">
						<input type="checkbox" name="course_cat[]" value="<?php echo $cat->term_id; ?>">
						<span class="checkmark"></span>
						<?php echo $cat->name; ?>
					</label>

					<?php
					$children = get_terms([
						'taxonomy' => 'course_cat',
						'hide_empty' => true,
						'parent' => $cat->term_id
					]);

					if ($children) :
						echo '<div class="filter-children">';
						foreach ($children as $child) :
							?>
							<label class="u-flex gap-sm items-center custom-checkbox">
								<input type="checkbox" name="course_cat[]" value="<?php echo $child->term_id; ?>">
								<span class="checkmark"></span>
								<?php echo $child->name; ?>
							</label>
						<?php
						endforeach;
						echo '</div>';
					endif;
				endforeach;
				?>
			</div>
			<?php endif; ?>
			<!-- نوع آموزش -->
			<?php $types = get_terms([
				'taxonomy' => 'course_type',
				'hide_empty' => true
			]);if($types):?>
			<div class="filter-group u-flex u-flex--column gap-sm">
				<div class="filter-group__title">
					<h4 class="m-0 relative">نوع آموزش</h4>
				</div>
				<?php
				foreach ($types as $type) :
					?>
					<label class="u-flex gap-sm items-center custom-checkbox">
						<input type="checkbox" name="course_type[]" value="<?php echo $type->term_id; ?>">
						<span class="checkmark"></span>
						<?php echo $type->name; ?>
					</label>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
			<button type="submit" class="btn-primary-gradiant w-100">اعمال فیلتر</button>
		</form>
	</div>
</aside>
