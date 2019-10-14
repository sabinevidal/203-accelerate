<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/
// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
  wp_enqueue_style( 'accelerate-google-fonts', '//fonts.googleapis.com/css?family=Londrina+Solid:400,900|Contrail+One');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// CUSTOM CASE STUDY POST
function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );
}
add_action( 'init', 'create_custom_post_types' );

// CUSTOM SERVICES POST
function create_services_offered() {
  register_post_type( 'services-offered',
      array(
          'labels' => array(
              'name' => __( 'Services Offered' ),
              'singular_name' => __( 'Service Offered' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array( 'slug' => 'services' ),
      )
  );
}
add_action( 'init', 'create_services_offered' );

/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */

if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
          }
        );
      }
    }
  }
fa_custom_setup_kit('https://kit.fontawesome.com/e4ef0962fa.js');


add_filter( 'body_class','accelerate_child_body_classes' );
function accelerate_child_body_classes( $classes ) {


  if (is_page('contact-us') ) {
    $classes[] = 'contact';
  }
    
    return $classes;
     
}

// TWITTER FEED WIDGET

function accelerate_theme_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h4 class="widget-title">',
	    'after_title' => '</h4>',
	) );
	
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
