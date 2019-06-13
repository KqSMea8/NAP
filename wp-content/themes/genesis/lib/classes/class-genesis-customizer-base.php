<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Customizer
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

/**
 * Base class for Customizer classes in Genesis.
 *
 * No longer used by Genesis core, this class will eventually be deprecated.
 *
 * @since 2.1.0
 */
abstract class Genesis_Customizer_Base {

	/**
	 * Define defaults, call the `register` method, add CSS to head.
	 *
	 * @since 2.1.0
	 */
	public function __construct() {

		// Register new Customizer elements.
		if ( method_exists( $this, 'register' ) ) {
			add_action( 'customize_register', array( $this, 'register' ), 15 );
		} else {
			_doing_it_wrong( 'Genesis_Customizer_Base', esc_html__( 'When extending Genesis_Customizer_Base, you must create a register method.', 'genesis' ), '2.1.0' );
		}

		// Customizer scripts.
		if ( method_exists( $this, 'scripts' ) ) {
			add_action( 'customize_preview_init', 'scripts' );
		}

	}

	/**
	 * Get field name attribute value.
	 *
	 * @since 2.1.0
	 *
	 * @param string $name Option name.
	 * @return string Option name as key of settings field.
	 */
	protected function get_field_name( $name ) {
		return sprintf( '%s[%s]', $this->settings_field, $name );
	}

	/**
	 * Get field ID attribute value.
	 *
	 * @since 2.1.0
	 *
	 * @param string $id Option ID.
	 * @return string Option ID as key of settings field.
	 */
	protected function get_field_id( $id ) {
		return sprintf( '%s[%s]', $this->settings_field, $id );
	}

	/**
	 * Get field value.
	 *
	 * @since 2.1.0
	 *
	 * @param string $key Option key.
	 * @return mixed Field value.
	 */
	protected function get_field_value( $key ) {
		return genesis_get_option( $key, $this->settings_field );
	}

	/**
	 * Takes an array of settings and registers them.
	 *
	 * @since 2.6.0
	 *
	 * @param array                $settings     Settings to be registered.
	 * @param WP_Customize_Manager $wp_customize WP Customizer Manager object.
	 */
	protected function add_settings( array $settings, WP_Customize_Manager $wp_customize ) {

		foreach ( $settings as $key => $default ) {

			$wp_customize->add_setting(
				$this->get_field_name( $key ),
				array(
					'default' => $default,
					'type'    => 'option',
				)
			);

		}

	}

}
