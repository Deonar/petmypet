<?php
if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0.21328132');
}

/**
 * Enqueue scripts and styles.
 */
function themes_scripts()
{
    // load fonts 
		wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&display=swap', array());
		wp_enqueue_style('ofelia-font-css', 'https://use.typekit.net/vtx0ecq.css', array());


    // styles
    wp_enqueue_style('main-style', get_template_directory_uri() .  '/dist/css/main.min.css', array(), _S_VERSION);
    wp_enqueue_style('custom-style', get_stylesheet_uri(), array(), time());

    // script
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/js/main.min.js', array('jquery'), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'themes_scripts');

/* Disable the Admin Bar. */
add_filter('show_admin_bar', '__return_false');


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Register options page.
        acf_add_options_page(array(
            'page_title'    => __('General settings'),
            'menu_title'    => __('General settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

//Remove JQuery migrate
function remove_jquery_migrate($scripts)
{
    if (!is_admin() && isset($scripts->registered['jquery'])) {
        $script = $scripts->registered['jquery'];
        if ($script->deps) {
            $script->deps = array_diff($script->deps, array(
                'jquery-migrate'
            ));
        }
    }
}

add_action('wp_default_scripts', 'remove_jquery_migrate');

/* Disable the Admin Bar. */
// add_filter('show_admin_bar', '__return_false');

if (!function_exists('start_wp_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function start_wp_setup()
    {

        // Add default posts and comments RSS feed links to head.
        // add_theme_support('automatic-feed-links');

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
        add_theme_support('title-tag');

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                // 'main-menu' =>  esc_html__('Main menu', 'start-wp'),
                // 'footer-menu' =>  esc_html__('Footer menu', 'start-wp')
            )
        );


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
add_action('after_setup_theme', 'start_wp_setup');


/***********************************************/
/***************FILE INCLUDES***************/
/***********************************************/
require_once('library/includes/wp_bootstrap_navwalker.php');


/***********************************************/
/*********************MENUS*********************/
/***********************************************/


function front_menu_nav(){
    wp_nav_menu( array(
        'menu'              => 'front',
        'theme_location'    => 'front',
        'depth'             => 3,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'mainmenu',
        'menu_class'        => 'nav navbar-nav mr-auto',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );
}
function primary_menu_nav(){
    wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 3,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'mainmenu',
        'menu_class'        => 'nav navbar-nav mr-auto',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );
}



register_nav_menus( array(
    'front' => __( 'Front Menu', 'PetMyPet' ),
    'primary' => __( 'Primary Menu', 'PetMyPet' ),
) );



// Contact Form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );

add_filter( 'wpcf7_form_elements', 'remove_p_and_br_tags' );
function remove_p_and_br_tags( $content ) {
    $content = preg_replace( '/<\/p>\s*<p>/', '', $content );
    $content = preg_replace( '/<\/?br\s?\/?>/', '', $content );
    return $content;
}

/**
 * Disable the emoji's
 */
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
    add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
   }
   add_action( 'init', 'disable_emojis' );
   
   /**
    * Filter function used to remove the tinymce emoji plugin.
    * 
    * @param array $plugins 
    * @return array Difference betwen the two arrays
    */
   function disable_emojis_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
    return array();
    }
   }
   
   /**
    * Remove emoji CDN hostname from DNS prefetching hints.
    *
    * @param array $urls URLs to print for resource hints.
    * @param string $relation_type The relation type the URLs are printed for.
    * @return array Difference betwen the two arrays.
    */
   function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
    if ( 'dns-prefetch' == $relation_type ) {
    /** This filter is documented in wp-includes/formatting.php */
    $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
   
   $urls = array_diff( $urls, array( $emoji_svg_url ) );
    }
   
   return $urls;
   }
   