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
  wp_enqueue_style('accelerate-child-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array('child-style'));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// ADD CUSTOM POST - CASE STUDIES //
function create_custom_post_types() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )   
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies'),       
        )
    );   
        
    register_post_type('service_type',
        array(
            'labels' => array(
                'name'  => __( 'Services' ),
                'singular_name'  => __( 'Service' ),
            ),
            'public'  => true,
            'has_archive'  => true, 
            'rewrite' => array( 'slug' => 'service'), 
        )
    );
}
add_action ( 'init', 'create_custom_post_types');

// ADD CLASS FOF CONTACT PAGE //
add_filter(
    'body_class','accelerate_child_body_classes' );
function accelerate_child_body_classes ($classes ) {
    if (is_page('contact') ) {
        $classes[] = 'contact';
        }
    
        if (is_page('confirmation') ) {
       $classes[] = 'confirmation';
        }
    return $classes;

    if (is_page('about') ) {
        $classes[] = 'about';
         }
     return $classes;
}


