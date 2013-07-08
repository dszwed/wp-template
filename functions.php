<?php

/* @package WordPress
 * @subpackage Your_Theme_Name
 * @since Your_Theme_Name 1.0
 */

/**
 * Actions' hooks
 */
add_action('after_setup_theme', 'your_theme_name_setup');
add_action( 'widgets_init', 'your_theme_name_widgets_init' );

if (!function_exists('your_theme_name_setup')):

    function your_theme_name_setup() {

        /* Make theme available for translation.
         * Translations can be added to the /languages/ directory.
         */
        load_theme_textdomain('your_theme_name', get_template_directory() . '/languages');

        $locale = get_locale();
        $locale_file = get_template_directory() . "/languages/$locale.php";
        if (is_readable($locale_file))
            require_once( $locale_file );

        // This theme uses wp_nav_menu().
        register_nav_menu('primary', __('Primary Menu', 'your_theme_name'));
    }

endif;

/**
 * Register our sidebars and widgetized areas.
 *
 * @since your_theme_name 1.0
 */
function your_theme_name_widgets_init() {

    register_sidebar(array(
        'name' => __('Pasek boczny', 'your_theme_name'),
        'id' => 'sidebar',
        'description' => __('Opcjonalne pola na widget-y', 'your_theme_name'),
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '',
        'after_title' => '',
    ));
}


/*
 * Enqueue necessary scripts
 *
 * @since your_theme_name 1.0
 */
 
function your_theme_name_enqueue(){
	
}