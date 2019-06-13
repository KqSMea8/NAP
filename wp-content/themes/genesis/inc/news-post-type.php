<?php

/*
Details
Post types : news
*/

//create function for custom Post Type --------
if ( ! function_exists( 'custom_postType_news' ) ){

function custom_postType_news() {
  $labels = array(
  		'name' => 'News',
		'singular_name' => 'News',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New News',
		'edit_item' => 'Edit News',
		'new_item' => 'New News',
		'view_item' => 'View News',
		'search_items' => 'Search News',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Trash',
		'parent_item_colon' => ''
  );

  $args = array(
		'labels' => $labels,
		'public' => true,
		'rewrite' => array('slug' => 'event-news'),
		'hierarchical' => false,
		'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type( 'news', $args );
}

add_action( 'init', 'custom_postType_news' );
}


add_action("manage_posts_custom_column",  "news_custom_columns");
add_filter("manage_edit-news_columns", "news_edit_columns");
 
function news_edit_columns($columns){
  $columns = array(
    "cb" => "<input type='checkbox'/>",
    "title" => "News Title",
    "date" => "Date",
	
  );
 
  return $columns;
}
function news_custom_columns($column){
  global $post;
 
  switch ($column) {
    case "date":
      echo get_the_term_list($post->ID, 'post_date', '', ', ','');
      break;
 
  }
  
}



