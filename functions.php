<?php

/* @package WordPress
 * @subpackage [people_theme_name]
 * @since [people_theme_name] 1.0
 */

/**
 * Actions' hooks
 */
add_action('after_setup_theme', '[theme_name]_setup');
add_action( 'widgets_init', '[theme_name]_widgets_init' );

if (!function_exists('[theme_name]_setup')):

    function [theme_name]_setup() {

        /* Make theme available for translation.
         * Translations can be added to the /languages/ directory.
         */
        load_theme_textdomain('[theme_name]', get_template_directory() . '/languages');

        $locale = get_locale();
        $locale_file = get_template_directory() . "/languages/$locale.php";
        if (is_readable($locale_file))
            require_once( $locale_file );

        // This theme uses wp_nav_menu().
        register_nav_menu('primary', __('Primary Menu', '[theme_name]'));
    }

endif;

/**
 * Register our sidebars and widgetized areas. Also register the default Epherma widget.
 *
 * @since [theme_name] 1.0
 */
function [theme_name]_widgets_init() {

    //register_widget( 'Twenty_Eleven_Ephemera_Widget' );

    register_sidebar(array(
        'name' => __('Pasek boczny', '[theme_name]'),
        'id' => 'sidebar',
        'description' => __('Opcjonalne pola na widget-y', '[theme_name]'),
        'before_widget' => '',
        'after_widget' => "",
        'before_title' => '',
        'after_title' => '',
    ));
}