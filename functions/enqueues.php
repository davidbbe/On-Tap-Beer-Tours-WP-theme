<?php

function bst_enqueues() {

	/* Styles */
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.min.css', false, '3.3.4', null);
	wp_enqueue_style('bootstrap-css');
  wp_register_style('bst-css', get_template_directory_uri() . '/css/bst.css', false, null);
	wp_enqueue_style('bst-css');
  wp_register_style('colors-css', get_template_directory_uri() . '/css/colors/default.css', false, null);
	wp_enqueue_style('colors-css');
  wp_register_style('google-font-css', 'https://fonts.googleapis.com/css?family=Hind:400,700', false, null);
	wp_enqueue_style('google-font-css');
  wp_register_style('fontawesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', false, null);
	wp_enqueue_style('fontawesome-css');
  wp_register_style('rs-plugin-css', get_template_directory_uri() . '/plugins/rs-plugin/css/settings.css', false, null);
	wp_enqueue_style('rs-plugin-css');
  wp_register_style('style', get_template_directory_uri() . '/css/style.css', false, null);
	wp_enqueue_style('style');


	/* Scripts */
	wp_enqueue_script( 'jquery' );
  wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, true);
	wp_enqueue_script('modernizr');
  wp_register_script('bootstrap-js', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', false, null, true);
	wp_enqueue_script('bootstrap-js');
	wp_register_script('rs-tools', get_template_directory_uri() . '/plugins/rs-plugin/js/jquery.themepunch.tools.min.js', false, null, true);
	wp_enqueue_script('rs-tools');
	wp_register_script('revolution', get_template_directory_uri() . '/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js', false, null, true);
	wp_enqueue_script('revolution');
	wp_register_script('waypoints', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', false, null, true);
	wp_enqueue_script('waypoints');
	wp_register_script('smoothscroll', get_template_directory_uri() . '/plugins/smoothscroll/SmoothScroll.js', false, null, true);
	wp_enqueue_script('smoothscroll');
	wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', false, null, true);
	wp_enqueue_script('custom-js');


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'bst_enqueues', 100);
