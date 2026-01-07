<?php
		if( get_row_layout() == 'txt-txt' ):

			$first_column  = get_sub_field('first-column-txt');
			$second_column = get_sub_field('second-column-txt');

			echo '<div class="txt-txt u-flex gap-md">';

			if( $first_column ):
				echo '<div class="txt-txt-first txt flex-1">';
				echo $first_column;
				echo '</div>';
			endif;

			if( $second_column ):
				echo '<div class="txt-txt-second txt flex-1">';
				echo $second_column;
				echo '</div>';
			endif;

			echo '</div>';

		endif;


?>
