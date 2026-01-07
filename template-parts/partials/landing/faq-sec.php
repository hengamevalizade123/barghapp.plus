<?php
		if( get_row_layout() == 'faq-sec' ):
			if( have_rows('faq') ):
				echo '<div class="faq-sec">';
				while( have_rows('faq') ): the_row();
					$question = get_sub_field('question');
					$answer = get_sub_field('answer');
					echo '<div class="faq-item">';
					echo '<h3 class="faq-question">' . $question . '</h3>';
					echo '<div class="faq-answer">' . $answer . '</div>';
					echo '</div>';
				endwhile;
				echo '</div>';
			endif;
		endif;

?>
