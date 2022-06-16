<?php
/**
 * Pravoved functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Pravoved
 */

if ( ! function_exists( 'pravoved_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pravoved_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Pravoved, use a find and replace
		 * to change 'pravoved' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pravoved', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'pravoved_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );


	}
endif;
add_action( 'after_setup_theme', 'pravoved_setup' );
add_filter('show_admin_bar', '__return_false'); // отключить


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pravoved_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'pravoved_content_width', 640 );
}
add_action( 'after_setup_theme', 'pravoved_content_width', 0 );

add_action( 'wp_enqueue_scripts', 'wpcf7_modal_invalid_js' );
add_action( 'wp_footer', 'wpcf7_modal_mailsent_js_inline', 999 );

function wpcf7_modal_invalid_js() {
    wp_enqueue_script( 'sweetalert', 'https://unpkg.com/sweetalert/dist/sweetalert.min.js' );
}

/**
 * Выводит на экран модальное окно при успешной отправки формы.
 *
 * @return void
 */
function wpcf7_modal_mailsent_js_inline() {
	?>
    <script>
        // Срабатывает при успешной отправке формы.
        document.addEventListener('wpcf7mailsent', function (response) {
            // Запускает модальное окно.
            swal({
                title: "Спасибо!",
                text: response.detail.apiResponse.message,
                icon: "success",
                button: "Закрыть"
            });
        }, false);
    </script>

    <style>
        .wpcf7-mail-sent-ok {
            display: none !important;
        }
    </style>
	<?php
}

/**
 * Поключает библиотеку sweetalert.js для создания красивых модальных окон.
 *
 * @link https://sweetalert.js.org/
 *
 * @return void
 */

/**
 * Выводит на экран модальное окно при ошибках валидации формы.
 *
 * @return void
 */
add_action( 'wp_footer', 'wpcf7_modal_invalid_js_inline', 999 );

function wpcf7_modal_invalid_js_inline() {
    ?>
    <script>
        // Срабатывает при ошибках валидации формы.
        document.addEventListener('wpcf7invalid', function (response) {
            // Запускает модальное окно.
            swal({
                title: "Ошибка!",
                text: response.detail.apiResponse.message,
                icon: "error",
                button: "Закрыть"
            });
        }, false);
    </script>

    <style>
        .wpcf7-validation-errors {
            display: none !important;
        }
    </style>
    <?php
}
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function pravoved_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Контактная Информация', 'pravoved' ),
		'id'            => 'info-contact',
		'description'   => esc_html__( 'Add widgets here.', 'pravoved' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer__item-serv">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Контактная Информация Footer', 'pravoved' ),
		'id'            => 'info-footer',
		'description'   => esc_html__( 'Add widgets here.', 'pravoved' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer__item-serv">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'pravoved' ),
		'id'            => 'footer-column-1',
		'description'   => esc_html__( 'Add widgets here.', 'pravoved' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer__item-serv">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'pravoved' ),
		'id'            => 'footer-column-2',
		'description'   => esc_html__( 'Add widgets here.', 'pravoved' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer__item-serv">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'pravoved' ),
		'id'            => 'footer-column-3',
		'description'   => esc_html__( 'Add widgets here.', 'pravoved' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer__item-serv">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Социальные иконки в Шапки сайта', 'pravoved' ),
		'id'            => 'head-social',
		'description'   => esc_html__( 'Add widgets here.', 'pravoved' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s footer__item-serv">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'pravoved_widgets_init' );

add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
	return $content;
	});

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
	  if (in_array('current-menu-item', $classes) ){
		$classes[] = 'link-active ';
	  }
	  return $classes;
	}
/**
 * Enqueue scripts and styles.
 */
function pravoved_scripts() {
	
	// для локальных стилей
	wp_enqueue_style( 'pravoved-fontsaversome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'pravoved-libs-style', get_template_directory_uri() . '/assets/css/libs.min.css' );
	wp_enqueue_style( 'pravoved-my-style', get_template_directory_uri() . '/assets/css/pravoved.css' );

	wp_enqueue_style( 'pravoved-main-style', get_template_directory_uri() . '/assets/css/styles.min.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
		

	}
	wp_enqueue_script( 'pravoved-jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.js', [], '', true );
		wp_enqueue_script( 'pravoved-script', get_template_directory_uri() . '/assets/js/script.min.js', [], '', true );
}
add_action( 'wp_enqueue_scripts', 'pravoved_scripts' );

function add_menu_link_class( $atts, $item, $args ) {
	if (property_exists($args, 'link_class')) {
	  $atts['class'] = $args->link_class;
	}
	return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
  function add_menu_list_item_class($classes, $item, $args) {
	if (property_exists($args, 'list_item_class')) {
		$classes[] = $args->list_item_class;
	}
	return $classes;
  }
  add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

