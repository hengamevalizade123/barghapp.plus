<?php
if (get_row_layout() === 'faq-sec' && have_rows('faq')) :

	$schema_faq = [];

	echo '<div class="faq-sec" itemscope itemtype="https://schema.org/FAQPage">';
	echo '<h2>سوالات متداول</h2>';

	while (have_rows('faq')) : the_row();
		$question = get_sub_field('question');
		$answer   = get_sub_field('answer');

		if (!$question || !$answer) continue;

		echo '<div class="faq-item" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">';
		echo '<h3 class="faq-question" itemprop="name">' . esc_html($question) . '</h3>';
		echo '<div class="faq-answer" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">';
		echo '<div itemprop="text">' . wp_kses_post($answer) . '</div>';
		echo '</div>';
		echo '</div>';

	endwhile;

	echo '</div>';

endif;
?>
