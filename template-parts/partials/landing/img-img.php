<?php

		if( get_row_layout() == 'img-img' ):
			$first_image = get_sub_field('img-img-first');  // تصویر ستون اول
			$second_image = get_sub_field('img-img-second'); // تصویر ستون دوم

			echo '<div class="img-img u-flex gap-md items-center">';

			if( $first_image ):
				echo '<div class="img-img-first border-radius">';
				echo '<img src="' . $first_image['url'] . '" alt="' . $first_image['alt'] . '">';
				echo '</div>';
			endif;

			if( $second_image ):
				echo '<div class="img-img-second border-radius">';
				echo '<img src="' . $second_image['url'] . '" alt="' . $second_image['alt'] . '">';
				echo '</div>';
			endif;

			echo '</div>';
		endif;

?>
