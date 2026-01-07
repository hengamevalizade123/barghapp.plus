<?php

		if( get_row_layout() == 'full-width-img' ):
			$image = get_sub_field('img'); // برمی‌گردونه به صورت آرایه
			if( $image ):
				$img_url = $image['url'];
				$alt_text = $image['alt'];
				echo '<div class="full-width-img u-flex">';
				echo '<img class="border-radius cover" src="' . $img_url . '" alt="' . $alt_text . '" />';
				echo '</div>';
			endif;
		endif;

?>
