<?php
/**
 * Using the functions.php file
 *
 * ===== PLEASE NOTE ==========================================================
 * 
 * Unlike style.css, the functions.php of a child theme does not override its 
 * counterpart from the parent. Instead, it is loaded in ADDITION to the parent's 
 * functions.php. (Specifically, it is loaded right BEFORE the parent's file.)
 * 
 * The functions.php of a child theme provides a
 * method of modifying the functionality of a parent theme. 
 * 
 * The fact that a child theme’s functions.php is loaded first means that you can 
 * make the user functions of your theme pluggable — that is, replaceable by a 
 * child theme— by declaring them conditionally.
 * 
 * if ( ! function_exists( 'theme_special_nav' ) ) {
 *   function theme_special_nav() {
 *     //  Do something.
 *  }
 * }
 * 
 * In that way, a child theme can replace a PHP function of the parent by simply declaring it beforehand.
 * 
 * More at: https://developer.wordpress.org/themes/advanced-topics/child-themes/
 * 
 * 
 * Pointing to child theme or parent theme files
 * 
 * Since the style.css is in the root of your child theme’s  
 * subdirectory, use get_stylesheet_directory_uri() to point 
 * to your child theme’s directory. To reference the parent theme  
 * directory, use get_template_directory_uri() instead.
 *
 * Use ####s to indicate the priority for loading... ie, to make
 * The child theme CSS enqueue AFTER the parent theme CSS.
 * Sometimes you want your custom CSS to be at the end so that it
 * overrides CSS rules defined in the parent theme or some plugins.
 *
 * NOTE: Add CSS in "Customizer" adds the CSS to EACH page of your 
 * website, and while ideal for customizing, it is better to move the
 * styles to your (cacheable) style.css file for final delivery.
 * 
 * =============================================================================== */

/* 
 * NOTE. Enqueueing the parent theme CSS file may NOT be needed.
 * Often, this file is already inqueued in the parent theme.
 * Just disable/delete this if you have TWO parent style.css files
 * in the <head> section of your output (front-end) code.
 */
function parent_theme_stylesheet() {
	wp_enqueue_style( 'parent-stylesheet', get_template_directory_uri() . '/style.css' );
} 
add_action( 'wp_enqueue_scripts', 'parent_theme_stylesheet', 10 );

/* Enqueue the child theme styles. */
function child_theme_stylesheet() {
	wp_enqueue_style( 'child-stylesheet', get_stylesheet_directory_uri() . '/style.css' );
} 
add_action( 'wp_enqueue_scripts', 'child_theme_stylesheet', 999 );


/* 
  You can add your own php functions and code snippets below
  see https://developer.wordpress.org/themes/basics/theme-functions/
*/

