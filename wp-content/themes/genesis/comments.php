<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

if ( post_password_required() ) {
	printf( '<p class="alert">%s</p>', esc_html__( 'This post is password protected. Enter the password to view comments.', 'genesis' ) );
	return;
}

// Output semantically correct header if accessibility is supported.
if ( genesis_a11y( 'headings' ) ) {
	printf( '<h2 class="screen-reader-text">%s</h2>', esc_html__( 'Reader Interactions', 'genesis' ) );
}

/**
 * Fires before the main comments action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before_comments' );

/**
 * Fires to display the main comments content.
 *
 * @since 1.1.2
 */
do_action( 'genesis_comments' );

/**
 * Fires after the main comments action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_after_comments' );

/**
 * Fires before the main pings action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before_pings' );

/**
 * Fires to display the main pings content.
 *
 * @since 1.1.2
 */
do_action( 'genesis_pings' );

/**
 * Fires after the main pings action hook.
 *
 * @since 1.0.0
 */
do_action( 'genesis_after_pings' );

/**
 * Fires before the main comment form action hook.
 *
 * @since 1.1.0
 */
do_action( 'genesis_before_comment_form' );

/**
 * Fires to display the main comment form content.
 *
 * @since 1.1.0
 */
do_action( 'genesis_comment_form' );

/**
 * Fires after the main comment form action hook.
 *
 * @since 1.1.0
 */
do_action( 'genesis_after_comment_form' );
