<?php

		if( get_row_layout() == 'video' ):

			$video = get_sub_field('full-video');

			if( $video ):
				$video_url = $video['url'];
				$video_title = $video['title'];

				echo '<div class="landing-video u-flex">';
				echo '<video class="cover" controls>';
				echo '<source src="' . $video_url . '" type="video/mp4">';
				echo 'مرورگر شما ویدئو را پشتیبانی نمی‌کند.';
				echo '</video>';
				echo '</div>';
			endif;

		endif;

?>
