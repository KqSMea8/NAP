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
		<th scope="row"><?php esc_html_e( 'Indexing', 'genesis' ); ?>
			<a href="https://yoast.com/robots-meta-tags/" target="_blank" rel="noopener noreferrer">[?]</a>
		</th>
		<td>
			<p>
				<label for="<?php $this->field_id( 'noindex_cat_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noindex_cat_archive' ); ?>" id="<?php $this->field_id( 'noindex_cat_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noindex_cat_archive' ) ); ?> />
				<?php
					/* translators: Meta noindex attribute. */
					printf( esc_html__( 'Apply %s to Category Archives?', 'genesis' ), genesis_code( 'noindex' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noindex_tag_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noindex_tag_archive' ); ?>" id="<?php $this->field_id( 'noindex_tag_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noindex_tag_archive' ) ); ?> />
				<?php
					/* translators: Meta noindex attribute. */
					printf( esc_html__( 'Apply %s to Tag Archives?', 'genesis' ), genesis_code( 'noindex' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noindex_author_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noindex_author_archive' ); ?>" id="<?php $this->field_id( 'noindex_author_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noindex_author_archive' ) ); ?> />
				<?php
					/* translators: Meta noindex attribute. */
					printf( esc_html__( 'Apply %s to Author Archives?', 'genesis' ), genesis_code( 'noindex' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noindex_date_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noindex_date_archive' ); ?>" id="<?php $this->field_id( 'noindex_date_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noindex_date_archive' ) ); ?> />
				<?php
					/* translators: Meta noindex attribute. */
					printf( esc_html__( 'Apply %s to Date Archives?', 'genesis' ), genesis_code( 'noindex' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noindex_search_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noindex_search_archive' ); ?>" id="<?php $this->field_id( 'noindex_search_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noindex_search_archive' ) ); ?> />
				<?php
					/* translators: Meta noindex attribute. */
					printf( esc_html__( 'Apply %s to Search Archives?', 'genesis' ), genesis_code( 'noindex' ) );
				?>
				</label>
			</p>
		</td>
	</tr>

</tbody>
</table>

<table class="form-table">
<tbody>

	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Archiving', 'genesis' ); ?>
			<a href="https://yoast.com/robots-meta-tags/" target="_blank" rel="noopener noreferrer">[?]</a>
		</th>
		<td>
			<p>
				<label for="<?php $this->field_id( 'noarchive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noarchive' ); ?>" id="<?php $this->field_id( 'noarchive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noarchive' ) ); ?> />
				<?php
					/* translators: Meta noarchive attribute. */
					printf( esc_html__( 'Apply %s to Entire Site?', 'genesis' ), genesis_code( 'noarchive' ) );
				?>
				</label>
			</p>

			<p>
				<label for="<?php $this->field_id( 'noarchive_cat_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noarchive_cat_archive' ); ?>" id="<?php $this->field_id( 'noarchive_cat_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noarchive_cat_archive' ) ); ?> />
				<?php
					/* translators: Meta noarchive attribute. */
					printf( esc_html__( 'Apply %s to Category Archives?', 'genesis' ), genesis_code( 'noarchive' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noarchive_tag_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noarchive_tag_archive' ); ?>" id="<?php $this->field_id( 'noarchive_tag_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noarchive_tag_archive' ) ); ?> />
				<?php
					/* translators: Meta noarchive attribute. */
					printf( esc_html__( 'Apply %s to Tag Archives?', 'genesis' ), genesis_code( 'noarchive' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noarchive_author_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noarchive_author_archive' ); ?>" id="<?php $this->field_id( 'noarchive_author_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noarchive_author_archive' ) ); ?> />
				<?php
					/* translators: Meta noarchive attribute. */
					printf( esc_html__( 'Apply %s to Author Archives?', 'genesis' ), genesis_code( 'noarchive' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noarchive_date_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noarchive_date_archive' ); ?>" id="<?php $this->field_id( 'noarchive_date_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noarchive_date_archive' ) ); ?> />
				<?php
					/* translators: Meta noarchive attribute. */
					printf( esc_html__( 'Apply %s to Date Archives?', 'genesis' ), genesis_code( 'noarchive' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noarchive_search_archive' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noarchive_search_archive' ); ?>" id="<?php $this->field_id( 'noarchive_search_archive' ); ?>" value="1" <?php checked( $this->get_field_value( 'noarchive_search_archive' ) ); ?> />
				<?php
					/* translators: Meta noarchive attribute. */
					printf( esc_html__( 'Apply %s to Search Archives?', 'genesis' ), genesis_code( 'noarchive' ) );
				?>
				</label>
			</p>
		</td>
	</tr>

</tbody>
</table>


<table class="form-table">
<tbody>

	<tr valign="top">
		<th scope="row"><?php esc_html_e( 'Directories', 'genesis' ); ?>
			<a href="https://yoast.com/robots-meta-tags/" target="_blank" rel="noopener noreferrer">[?]</a>
		</th>
		<td>
			<p>
				<label for="<?php $this->field_id( 'noodp' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noodp' ); ?>" id="<?php $this->field_id( 'noodp' ); ?>" value="1" <?php checked( $this->get_field_value( 'noodp' ) ); ?> />
				<?php
					/* translators: Meta noodp attribute. */
					printf( esc_html__( 'Apply %s to your site?', 'genesis' ), genesis_code( 'noodp' ) );
				?>
				</label>
				<br />
				<label for="<?php $this->field_id( 'noydir' ); ?>"><input type="checkbox" name="<?php $this->field_name( 'noydir' ); ?>" id="<?php $this->field_id( 'noydir' ); ?>" value="1" <?php checked( $this->get_field_value( 'noydir' ) ); ?> />
				<?php
					/* translators: Meta noydir attribute. */
					printf( esc_html__( 'Apply %s to your site?', 'genesis' ), genesis_code( 'noydir' ) );
				?>
				</label>
			</p>
		</td>
	</tr>

</tbody>
</table>
