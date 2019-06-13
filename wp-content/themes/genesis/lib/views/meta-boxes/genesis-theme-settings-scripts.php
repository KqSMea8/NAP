<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

?>
<table class="form-table">
<tbody>

	<tr valign="top">
		<th scope="row"><label for="<?php $this->field_id( 'header_scripts' ); ?>"><?php esc_html_e( 'Header Scripts', 'genesis' ); ?></label></th>
		<td>
			<p><textarea name="<?php $this->field_name( 'header_scripts' ); ?>" class="large-text" id="<?php $this->field_id( 'header_scripts' ); ?>" cols="78" rows="8"><?php echo esc_textarea( $this->get_field_value( 'header_scripts' ) ); ?></textarea></p>
			<p><span class="description">
				<?php
				/* translators: Escaped HTML head tag. */
				printf( esc_html__( 'This code will output immediately before the closing %s tag in the document source.', 'genesis' ), genesis_code( '</head>' ) );
				?>
			</span></p>
		</td>
	</tr>

	<tr valign="top">
		<th scope="row"><label for="<?php $this->field_id( 'footer_scripts' ); ?>"><?php esc_html_e( 'Footer Scripts', 'genesis' ); ?></label></th>
		<td>
			<p><textarea name="<?php $this->field_name( 'footer_scripts' ); ?>" class="large-text" id="<?php $this->field_id( 'footer_scripts' ); ?>" cols="78" rows="8"><?php echo esc_textarea( $this->get_field_value( 'footer_scripts' ) ); ?></textarea></p>
			<p><span class="description">
				<?php
				/* translators: Escaped HTML body tag. */
				printf( esc_html__( 'This code will output immediately before the closing %s tag in the document source.', 'genesis' ), genesis_code( '</body>' ) );
				?>
			</span></p>
		</td>
	</tr>

</tbody>
</table>
