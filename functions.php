<?php
/**
 * Starter Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Starter_Theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'starter_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function starter_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Starter Theme, use a find and replace
		 * to change 'starter-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'starter-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'starter-theme' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'starter_theme_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'starter_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function starter_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'starter_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'starter_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function starter_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'starter-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'starter-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'starter_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function starter_theme_scripts() {
	wp_enqueue_style('theme-vendor-style', get_template_directory_uri() . '/assets/styles/vendor.min.css', array(), rand(111, 9999), 'all');
		wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/styles/style.min.css', array(), rand(111, 9999), 'all');
		wp_enqueue_script('theme-vendor', get_template_directory_uri() . '/assets/scripts/vendor.min.js', array('jquery'), rand(111, 9999), true);
		wp_enqueue_script('theme-js', get_template_directory_uri() . '/assets/scripts/main.min.js', array('jquery'), rand(111, 9999), true);
}
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// form viewer gravity
add_action('admin_init', function () {

	if (current_user_can('administrator')) {
		return;
	}

	$current_user = wp_get_current_user();
	$username = $current_user->user_login;

	// لیست مجاز
	$allowed_forms = [
		'epc' => [4, 2],
		'eco' => [3],
		'pro@barghapp.com' => [7],
		'bpk@barghapp.com' => [5],
	];

	global $pagenow;

	if ($pagenow === 'admin.php' && isset($_GET['page'])) {
		$page = sanitize_text_field($_GET['page']);
		$user_allowed_forms = isset($allowed_forms[$username]) ? $allowed_forms[$username] : [];

		if (empty($user_allowed_forms)) {
			wp_die('شما به هیچ فرمی دسترسی ندارید.');
		}

		// محدود کردن Entries
		if ($page === 'gf_entries') {
			$current_form_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
			if (!in_array($current_form_id, $user_allowed_forms)) {
				wp_redirect(admin_url('admin.php?page=gf_entries&id=' . $user_allowed_forms[0]));
				exit;
			}
		}

		// محدود کردن ارسال واقعی خروجی
		if ($page === 'gf_export' && isset($_POST['export_lead']) && isset($_POST['export_form'])) {
			$form_id = intval($_POST['export_form']);
			if (!in_array($form_id, $user_allowed_forms)) {
				wp_die('شما اجازه برون‌ریزی این فرم را ندارید.');
			}
		}
	}
});


// حذف فرم‌های غیرمجاز از لیست در صفحه برون‌ریزی (سمت کاربر)
add_action('admin_head', function () {

	if (!isset($_GET['page']) || $_GET['page'] !== 'gf_export') {
		return;
	}

	if (current_user_can('administrator')) {
		return;
	}

	$current_user = wp_get_current_user();
	$username = $current_user->user_login;

	$allowed_forms = [
		'epc' => [4, 2],
		'eco' => [3],
		'pro@barghapp.com' => [7],
		'bpk@barghapp.com' => [5],
	];

	if (!isset($allowed_forms[$username])) return;

	$user_allowed_forms = $allowed_forms[$username];
	$allowed_json = wp_json_encode($user_allowed_forms);

	echo "
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		const allowed = $allowed_json;
		const select = document.querySelector('select[name=\"export_form\"]');
		if (!select) return;
		[...select.options].forEach(opt => {
			const id = parseInt(opt.value);
			if (id && !allowed.includes(id)) {
				opt.remove();
			}
		});
	});
	</script>
	";
});


// پنهان کردن اعلان‌ها
add_action('admin_head', function() {
	$current_user = wp_get_current_user();
	$username = $current_user->user_login;

	$users_to_hide_notices = ['epc', 'eco', 'pro@barghapp.com', 'bpk@barghapp.com'];

	if (in_array($username, $users_to_hide_notices)) {
		echo '<style>
			.notice,
			.update-nag,
			.updated,
			.error,
			.is-dismissible,
			.rank-math-notice,
			.ep-notice,
			.elementor-notice,
			.elementor-admin-notice,
			.notice-warning,
			.notice-info,
			.notice-success {
				display: none !important;
			}
		</style>';
	}
});
/**
 * Display Reading time
 *
 * @return string
 */
function str_word_count_utf8($str)
{
	return count(preg_split('~[^\p{L}\p{N}\']+~u', $str));
}
//reading time
function display_reading_time()
{
	$post_id = get_the_ID();
	$word_count = str_word_count_utf8(strip_tags(get_post($post_id)->post_content));
	$reading_speed = 250;
	$reading_time = ceil($word_count / $reading_speed);
	if (1 === $reading_time) {
		return sprintf(__('زمان مطالعه: %s دقیقه', 'text_domain'), $reading_time);
	} else {
		return sprintf(__('زمان مطالعه: %s دقیقه', 'text_domain'), $reading_time);
	}
}

// Adding shortcode to display the reading time in the blog
add_shortcode('reading_time', 'display_reading_time');
