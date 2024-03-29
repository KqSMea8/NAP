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
<h3><?php esc_html_e( 'Homepage Settings', 'genesis' ); ?></h3>
<p>
	<?php esc_html_e( 'These are the homepage specific SEO settings. Note: these settings will not apply if a static page is set as the front page. If you\'re using a static WordPress page as your hompage, you\'ll need to set the SEO settings on that particular page.', 'genesis' ); ?>
</p>
<p>
	<?php esc_html_e( 'You can also specify if the Site Title, Description, or your own custom text should be wrapped in an <h1>; tag (the primary heading in HTML).', 'genesis' ); ?>
</p>
<p>
	<?php esc_html_e( 'To add custom text you\'ll have to either edit a php file, or use a text widget on a widget enabled homepage.', 'genesis' ); ?>
</p>
<p>
	<?php
	/* translators: %s: Escaped title tag. */
	printf( esc_html__( 'The home doctitle sets what will appear within the %1$s tags (unseen in the browser) for the home page.', 'genesis' ), '<code>&lt;title&gt;</code>' );
	?>
</p>
<p>
	<?php esc_html_e( 'The home META description and keywords fill in the meta tags for the home page. The META description is the short text blurb that appear in search engine results.', 'genesis' ); ?>
</p>
<p>
	<?php esc_html_e( 'Most search engines do not use Keywords at this time or give them very little consideration; however, it\'s worth using in case keywords are given greater consideration in the future and also to help guide your content. If the content doesn’t match with your targeted key words, then you may need to consider your content more carefully.', 'genesis' ); ?>
</p>
<p>
	<?php esc_html_e( 'The Homepage Robots Meta Tags tell search engines how to handle the homepage. Noindex means not to index the page at all, and it will not appear in search results. Nofollow means do not follow any links from this page and noarchive tells them not to make an archive copy of the page.', 'genesis' ); ?>
</p>
