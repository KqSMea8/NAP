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

add_filter( 'update_right_now_text', 'genesis_update_right_now_text' );
/**
 * Callback to amend the Right Now text, found in the At A Glance dashboard widget.
 *
 * @since 2.7.0
 *
 * @param string $content Existing Right Now text.
 * @return string Amended Right Now text.
 */
function genesis_update_right_now_text( $content ) {
	$string = sprintf(
		/* translators: %s: Genesis theme version */
		esc_html__( ' Using Genesis %s.', 'genesis' ),
		PARENT_THEME_VERSION
	);

	return $content . $string;
}
