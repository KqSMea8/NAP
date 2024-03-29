<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Assets
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

add_action( 'genesis_meta', 'genesis_load_stylesheet' );
/**
 * Echo reference to the style sheet.
 *
 * If a child theme is active, it loads the child theme's stylesheet, otherwise, it loads the Genesis style sheet.
 *
 * @since 1.0.0
 *
 * @see genesis_enqueue_main_stylesheet() Enqueue main style sheet.
 */
function genesis_load_stylesheet() {

	add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet', 5 );

}

/**
 * Enqueue main style sheet.
 *
 * Properly enqueue the main style sheet.
 *
 * @since 1.9.0
 */
function genesis_enqueue_main_stylesheet() {

	$name    = defined( 'CHILD_THEME_NAME' ) && CHILD_THEME_NAME ? CHILD_THEME_NAME : wp_get_theme()->get( 'Name' );
	$version = defined( 'CHILD_THEME_VERSION' ) && CHILD_THEME_VERSION ? CHILD_THEME_VERSION : wp_get_theme()->get( 'Version' );

	wp_enqueue_style( sanitize_title_with_dashes( $name ), get_stylesheet_uri(), false, $version );

}

add_action( 'admin_print_styles', 'genesis_load_admin_styles' );
/**
 * Enqueue Genesis admin styles.
 *
 * @since 1.0.0
 */
function genesis_load_admin_styles() {

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	wp_enqueue_style( 'genesis_admin_css', GENESIS_CSS_URL . "/admin{$suffix}.css", array(), PARENT_THEME_VERSION );

	if ( is_rtl() ) {
		wp_enqueue_style( 'genesis_admin_rtl_css', GENESIS_CSS_URL . "/admin-rtl{$suffix}.css", array(), PARENT_THEME_VERSION );
	}

}
