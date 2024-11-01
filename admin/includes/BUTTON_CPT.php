<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
register_post_type( 'socialmedia_cpt',array('labels' => array(
	'name' => __('Social Media','social-media'),
	'add_new' => __('Add New Icon group', 'social-media'),
	'add_new_item' => __('Add New Icon group','social-media'),
	'edit_item' => __('Add New Icon group','social-media'),
	'new_item' => __('New Link','social-media'),
	'all_items' => __('All Icon groups','social-media'),
	'view_item' => __('View Link','social-media'),
	'search_items' => __('Search Links','social-media'),
	'not_found' =>  __('No Links found','social-media'),
	'not_found_in_trash' => __('No Links found in Trash','social-media')),
'supports' => array('title'),
'hierarchical' => false,
'show_in' => true,
'show_ui' => true,
'show_in_nav_menus' => false,
'show_in_menu' => true,
'publicly_queryable' => true,
'exclude_from_search' => true,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' =>true,
'menu_position' => 67,		
'public' => true,
'capability_type' => 'post',
'menu_icon' =>Social_Media_Url.'images/SocialMedia_cpt_icon.png'));

add_filter( 'manage_edit-socialmedia_cpt_columns', array(&$this, 'socialmedia_cpt_columns' )) ;
add_action( 'manage_socialmedia_cpt_posts_custom_column', array(&$this, 'SocialMedia_manage_columns' ), 10, 2 );

?>