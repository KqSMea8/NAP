<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Customizer\SEO Settings
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

/**
 * The config array for setting up a Customizer panel, sections within that panel, settings and controls.
 *
 * If child theme contains a `customizer-seo-settings.php` config, it will be used instead of this config.
 *
 * @since 2.6.0
 */
return array(
	'genesis-seo' => array(
		'active_callback' => 'genesis_seo_active',
		'title'           => __( 'Theme SEO Settings', 'genesis' ),
		'description'     => __( 'Customize the various theme SEO settings.', 'genesis' ),
		'settings_field'  => 'genesis-seo-settings',
		'control_prefix'  => 'genesis-seo',
		'theme_supports'  => 'genesis-customizer-seo-settings',
		'sections'        => array(
			'genesis_seo_doctitle'    => array(
				'title'    => __( 'Document Title', 'genesis' ),
				'panel'    => 'genesis-seo',
				'controls' => array(
					'append_site_title'    => array(
						'label'    => __( 'Add site name to document title on inner pages? ', 'genesis' ),
						'section'  => 'genesis_seo_doctitle',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'doctitle_sep'         => array(
						'label'       => __( 'Document Title Separator', 'genesis' ),
						'description' => __( 'If the title consists of two parts (original title and optional addition), then the separator will go in between them.', 'genesis' ),
						'section'     => 'genesis_seo_doctitle',
						'type'        => 'text',
						'settings'    => array(
							'default' => '-',
						),
					),
					'doctitle_seplocation' => array(
						'label'       => __( 'Document Title Order', 'genesis' ),
						'description' => __( 'Determines which side the added title text will go on.', 'genesis' ),
						'section'     => 'genesis_seo_doctitle',
						'type'        => 'select',
						'choices'     => array(
							'left'  => __( 'Additions on left', 'genesis' ),
							'right' => __( 'Additions on right', 'genesis' ),
						),
						'settings'    => array(
							'default' => 'right',
						),
					),
				),
			),
			'genesis_seo_homepage'    => array(
				'title'    => __( 'Homepage', 'genesis' ),
				'panel'    => 'genesis-seo',
				'controls' => array(
					'home_h1_on'              => array(
						'label'    => __( 'Primary Title H1', 'genesis' ),
						'section'  => 'genesis_seo_homepage',
						'type'     => 'radio',
						'choices'  => array(
							'title'       => __( 'Site Title', 'genesis' ),
							'description' => __( 'Site Description (tagline)', 'genesis' ),
							'neither'     => __( 'None', 'genesis' ),
						),
						'settings' => array(
							'default' => 'title',
						),
					),
					'home_doctitle'           => array(
						'label'       => __( 'Homepage Document Title', 'genesis' ),
						'description' => __( 'If you leave the document title field blank, your site’s title will be used instead.', 'genesis' ),
						'section'     => 'genesis_seo_homepage',
						'type'        => 'text',
						'settings'    => array(
							'default' => '',
						),
					),
					'append_description_home' => array(
						'label'    => __( 'Add site description (tagline) to document title on home page? ', 'genesis' ),
						'section'  => 'genesis_seo_homepage',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'home_description'        => array(
						'label'       => __( 'Meta Description', 'genesis' ),
						'description' => __( 'The meta description can be used to determine the text used under the title on search engine results pages.', 'genesis' ),
						'section'     => 'genesis_seo_homepage',
						'type'        => 'textarea',
						'settings'    => array(
							'default' => '',
						),
					),
					'home_keywords'           => array(
						'label'       => __( 'Meta Keywords', 'genesis' ),
						'description' => __( 'Keywords are generally ignored by Search Engines.', 'genesis' ),
						'section'     => 'genesis_seo_homepage',
						'type'        => 'text',
						'settings'    => array(
							'default' => '',
						),
					),
					'home_noindex'            => array(
						'label'    => __( 'Apply noindex to the homepage', 'genesis' ),
						'section'  => 'genesis_seo_homepage',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'home_nofollow'           => array(
						'label'    => __( 'Apply nofollow to the homepage', 'genesis' ),
						'section'  => 'genesis_seo_homepage',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'home_noarchive'          => array(
						'label'    => __( 'Apply noarchive to the homepage', 'genesis' ),
						'section'  => 'genesis_seo_homepage',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
				),
			),
			'genesis_seo_dochead'     => array(
				'title'       => __( 'Document Head', 'genesis' ),
				'description' => __( 'By default, WordPress places several tags in your document title. Most of these tags are completely unnecessary, and provide no SEO value whatsoever; they just make your site slower to load. Choose which tags you would like included in your document title. If you do not know what something is, leave it unchecked.', 'genesis' ),
				'panel'       => 'genesis-seo',
				'controls'    => array(
					'head_adjacent_posts_rel_link' => array(
						'label'    => __( 'Adjacent Posts rel link tags', 'genesis' ),
						'section'  => 'genesis_seo_dochead',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'head_wlwmanifest_link'        => array(
						'label'    => __( 'Include Windows Live Writer Support Tag?', 'genesis' ),
						'section'  => 'genesis_seo_dochead',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'head_shortlink'               => array(
						'label'    => __( 'Include Shortlink Tag?', 'genesis' ),
						'section'  => 'genesis_seo_dochead',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
				),
			),
			'genesis_seo_indexing'    => array(
				'title'       => __( 'Indexing', 'genesis' ),
				'description' => __( 'Apply noindex to the archive pages below.', 'genesis' ),
				'panel'       => 'genesis-seo',
				'controls'    => array(
					'noindex_cat_archive'    => array(
						'label'    => __( 'Category Archives', 'genesis' ),
						'section'  => 'genesis_seo_indexing',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 1,
						),
					),
					'noindex_tag_archive'    => array(
						'label'    => __( 'Tag Archives', 'genesis' ),
						'section'  => 'genesis_seo_indexing',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 1,
						),
					),
					'noindex_author_archive' => array(
						'label'    => __( 'Author Archives', 'genesis' ),
						'section'  => 'genesis_seo_indexing',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 1,
						),
					),
					'noindex_date_archive'   => array(
						'label'    => __( 'Date Archives', 'genesis' ),
						'section'  => 'genesis_seo_indexing',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 1,
						),
					),
					'noindex_search_archive' => array(
						'label'    => __( 'Search Results', 'genesis' ),
						'section'  => 'genesis_seo_indexing',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 1,
						),
					),
				),
			),
			'genesis_seo_archiving'   => array(
				'title'       => __( 'Archiving', 'genesis' ),
				'description' => __( 'Apply noarchive to the pages below.', 'genesis' ),
				'panel'       => 'genesis-seo',
				'controls'    => array(
					'noarchive'                => array(
						'label'    => __( 'Entire Site', 'genesis' ),
						'section'  => 'genesis_seo_archiving',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'noarchive_cat_archive'    => array(
						'label'    => __( 'Category Archives', 'genesis' ),
						'section'  => 'genesis_seo_archiving',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'noarchive_tag_archive'    => array(
						'label'    => __( 'Tag Archives', 'genesis' ),
						'section'  => 'genesis_seo_archiving',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'noarchive_author_archive' => array(
						'label'    => __( 'Author Archives', 'genesis' ),
						'section'  => 'genesis_seo_archiving',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'noarchive_date_archive'   => array(
						'label'    => __( 'Date Archives', 'genesis' ),
						'section'  => 'genesis_seo_archiving',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
					'noarchive_search_archive' => array(
						'label'    => __( 'Search Results', 'genesis' ),
						'section'  => 'genesis_seo_archiving',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 0,
						),
					),
				),
			),
			'genesis_seo_directories' => array(
				'title'    => __( 'Directories', 'genesis' ),
				'panel'    => 'genesis-seo',
				'controls' => array(
					'noodp'  => array(
						'label'    => __( 'Apply noodp to entire site?', 'genesis' ),
						'section'  => 'genesis_seo_directories',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 1,
						),
					),
					'noydir' => array(
						'label'    => __( 'Apply noydir to entire site?', 'genesis' ),
						'section'  => 'genesis_seo_directories',
						'type'     => 'checkbox',
						'settings' => array(
							'default' => 1,
						),
					),
				),
			),
		),
	),
);
