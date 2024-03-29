<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Menus
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

add_filter( 'nav_menu_link_attributes', 'genesis_nav_menu_link_attributes' );
/**
 * Pass nav menu link attributes through attribute parser.
 *
 * Adds nav menu link attributes via the Genesis markup API.
 *
 * @since 2.2.0
 *
 * @param array $atts {
 *      The HTML attributes applied to the menu item's link element, empty strings are ignored.
 *
 *      @type string $title Title attribute.
 *      @type string $target Target attribute.
 *      @type string $rel The rel attribute.
 *      @type string $href The href attribute.
 * }
 * @return array Maybe modified menu attributes array.
 */
function genesis_nav_menu_link_attributes( $atts ) {

	if ( genesis_html5() ) {
		$atts = genesis_parse_attr( 'nav-link', $atts );
	}

	return $atts;

}

add_action( 'after_setup_theme', 'genesis_register_nav_menus' );
/**
 * Register the custom menu locations, if theme has support for them.
 *
 * Does the `genesis_register_nav_menus` action.
 *
 * @since 1.8.0
 *
 * @return void Return early if `genesis-menus` are not supported.
 */
function genesis_register_nav_menus() {

	if ( ! current_theme_supports( 'genesis-menus' ) ) {
		return;
	}

	$menus = get_theme_support( 'genesis-menus' );

	register_nav_menus( (array) $menus[0] );

	/**
	 * Fires after registering custom Genesis navigation menus.
	 *
	 * @since 1.8.0
	 */
	do_action( 'genesis_register_nav_menus' );

}

add_action( 'genesis_after_header', 'genesis_do_nav' );
/**
 * Echo the "Primary Navigation" menu.
 *
 * Applies the `genesis_do_nav` filter.
 *
 * @since 1.0.0
 */
function genesis_do_nav() {

	// Do nothing if menu not supported.
	if ( ! genesis_nav_menu_supported( 'primary' ) || ! has_nav_menu( 'primary' ) ) {
		return;
	}

	$class = 'menu genesis-nav-menu menu-primary';
	if ( genesis_superfish_enabled() ) {
		$class .= ' js-superfish';
	}

	genesis_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_class'     => $class,
		)
	);

}

add_action( 'genesis_after_header', 'genesis_do_subnav' );
/**
 * Echo the "Secondary Navigation" menu.
 *
 * Applies the `genesis_do_subnav` filter.
 *
 * @since 1.0.0
 */
function genesis_do_subnav() {

	// Do nothing if menu not supported.
	if ( ! genesis_nav_menu_supported( 'secondary' ) ) {
		return;
	}

	$class = 'menu genesis-nav-menu menu-secondary';
	if ( genesis_superfish_enabled() ) {
		$class .= ' js-superfish';
	}

	genesis_nav_menu(
		array(
			'theme_location' => 'secondary',
			'menu_class'     => $class,
		)
	);

}

add_filter( 'wp_nav_menu_items', 'genesis_nav_right', 10, 2 );
/**
 * Filter the Primary Navigation menu items, appending either RSS links, search form, twitter link, or today's date.
 *
 * @since 1.0.0
 *
 * @param string   $menu HTML string of list items.
 * @param stdClass $args Menu arguments.
 * @return string HTML string of list items with optional nav extras.
 *                Return early unmodified if first Genesis version is higher than 2.0.2.
 */
function genesis_nav_right( $menu, stdClass $args ) {

	// Only allow if using 2.0.2 or lower.
	if ( genesis_first_version_compare( '2.0.2', '>' ) ) {
		return $menu;
	}

	if ( 'primary' !== $args->theme_location || ! genesis_get_option( 'nav_extras' ) ) {
		return $menu;
	}

	switch ( genesis_get_option( 'nav_extras' ) ) {
		case 'rss':
			$rss   = '<a rel="nofollow" href="' . get_bloginfo( 'rss2_url' ) . '">' . __( 'Posts', 'genesis' ) . '</a>';
			$rss  .= '<a rel="nofollow" href="' . get_bloginfo( 'comments_rss2_url' ) . '">' . __( 'Comments', 'genesis' ) . '</a>';
			$menu .= '<li class="right rss">' . $rss . '</li>';
			break;
		case 'search':
			$menu .= '<li class="right search">' . get_search_form( false ) . '</li>';
			break;
		case 'twitter':
			$menu .= sprintf( '<li class="right twitter"><a href="%s">%s</a></li>', esc_url( 'https://twitter.com/' . genesis_get_option( 'nav_extras_twitter_id' ) ), esc_html( genesis_get_option( 'nav_extras_twitter_text' ) ) );
			break;
		case 'date':
			$menu .= '<li class="right date">' . date_i18n( get_option( 'date_format' ) ) . '</li>';
			break;
	}

	return $menu;

}
