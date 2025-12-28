<?php
/* Template Name: Home Page */
get_header();

include get_template_directory() . '/template-parts/partials/home/hero.php';
include get_template_directory() . '/template-parts/partials/home/introduction.php';
include get_template_directory() . '/template-parts/partials/home/home-desc.php';
include get_template_directory() . '/template-parts/partials/home/reason.php';
include get_template_directory() . '/template-parts/partials/home/analysis.php';
include get_template_directory() . '/template-parts/partials/home/customers.php';
include get_template_directory() . '/template-parts/partials/home/home-blog.php';
//include get_template_directory() . '/template-parts/partials/home/social-responsibility.php';
//include get_template_directory() . '/template-parts/partials/home/faq.php';
//include get_template_directory() . '/template-parts/partials/home/home-blog.php';

get_footer();
