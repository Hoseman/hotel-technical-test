<?php 
/**
 * Enqueue scripts and styles.
 */


 function load_stylesheets() {



    // Enqueue Font Awesome
    wp_register_style('font-awesome-free', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
    wp_enqueue_style('font-awesome-free');

    // Enqueue Owl Carousel

    // Enqueue our main stylesheet.
    wp_register_style('main', get_template_directory_uri() . '/dist/stylesheets/main.css', [], null, 'all');
    wp_enqueue_style('main');

	// wp_enqueue_style( 'ah-wordpress-boilerplate-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'ah-wordpress-boilerplate-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'ah-wordpress-boilerplate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}


add_action( 'wp_enqueue_scripts', 'load_stylesheets' );






    /**
 * Load scripts.
 */

 function load_scripts()
 {
     // Deregister the default WordPress version of jQuery and enqueue our own.
    //  wp_deregister_script('jquery');
    //  wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', [], false, true);
    //  wp_enqueue_script('jquery');
 
     // Deregister the default WordPress version of jQuery Migrate and enqueue our own.
    //  wp_deregister_script('jquery-migrate');
    //  wp_register_script('jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', 'jquery', false, true);
    //  wp_enqueue_script('jquery-migrate');

 
     // Enqueue our bundled JavaScript.
     wp_register_script('bundle', get_template_directory_uri() . '/dist/scripts/bundle.min.js', [], false, true);
     wp_enqueue_script('bundle');
 }
 
 add_action('wp_enqueue_scripts', 'load_scripts');