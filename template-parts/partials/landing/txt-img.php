
<?php
		if( get_row_layout() == 'txt-img' ):

			$text  = get_sub_field('txt-img-txt');
			$image = get_sub_field('txt-img-img');

			echo '<div class="txt-img u-flex items-center">';

			if( $text ):
				echo '<div class="txt-img-text txt-justify">';
				echo $text;
				echo '</div>';
			endif;

			if( $image ):
				echo '<div class="txt-img-image flex-1 border-radius">';
				echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '">';
				echo '</div>';
			endif;

			echo '</div>';

		endif;
?>
