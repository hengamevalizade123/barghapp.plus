<?php
		if( get_row_layout() == 'img-txt' ):
			$image = get_sub_field('img-txt-img');
			$text  = get_sub_field('img-txt-txt');

			echo '<div class="img-txt u-flex gap-md items-center">';

			if( $image ):
				echo '<div class="img-txt-image flex-1">';
				echo '<img class="border-radius cover" src="' . $image['url'] . '" alt="' . $image['alt'] . '">';
				echo '</div>';
			endif;

			if( $text ):
				echo '<div class="img-txt-text flex-1">';
				echo $text;
				echo '</div>';
			endif;

			echo '</div>';
		endif;
?>
