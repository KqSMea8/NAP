<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis\Admin
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

add_action( 'admin_init', 'genesis_theme_activation_redirect' );
/**
 * Redirects users to the Getting Started page after theme activation
 * if the theme provides an onboarding configuration in config/onboarding.php.
 *
 * @since 2.8.0
 */
function genesis_theme_activation_redirect() {

	global $pagenow;

	if ( 'themes.php' !== $pagenow || ! isset( $_GET['activated'] ) || ! is_admin() ) { // phpcs:ignore WordPress.Security.NonceVerification.NoNonceVerification
		return;
	}

	if ( version_compare( $GLOBALS['wp_version'], '5.0', '<' ) ) {
		return;
	}

	if ( ! genesis_get_config( 'onboarding' ) ) {
		return;
	}

	wp_safe_redirect( esc_url( admin_url( 'admin.php?page=genesis-getting-started' ) ) );
	exit;
}

add_action( 'after_switch_theme', 'genesis_import_child_theme_settings' );
/**
 * Import settings needed by a child theme to look correct and function properly.
 *
 * Search for `child-theme-settings.php` in child theme's config directory. If one exists, use it as the basis for importing custom settings.
 *
 * @since 2.9.0
 *
 * @return bool True if settings saved. False otherwise.
 */
function genesis_import_child_theme_settings() {
	$settings_saved = false;
	$config         = genesis_get_config( 'child-theme-settings' );

	if ( ! $config ) {
		return false;
	}

	// Validate all settings keys are strings.
	$all_keys    = array_keys( $config );
	$string_keys = array_filter( $all_keys, 'is_string' );
	if ( count( $string_keys ) === 0 || count( $all_keys ) !== count( $string_keys ) ) {
		return false;
	}

	foreach ( (array) $config as $key => $value ) {
		$settings_saved = is_array( $value ) ? genesis_update_settings( $value, $key ) : update_option( $key, $value );
	}

	return $settings_saved;
}
