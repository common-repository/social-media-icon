<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$id=$post->ID;
$custom_data = unserialize(get_post_meta($id,'socialmedia_custom_setting_'.$id, true));
if(!(isset($custom_data['sm_layout']) && isset($id))){
	$custom_data = unserialize(get_option("socialmedia_Default_Setting", true));	
} 
?>