<?php 

/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class SocialMedia_admin_style_script
{
	
	function __construct()
	{
		add_action('admin_enqueue_scripts', array(&$this,'SocialMedia_metaboxes_scripts'));
	}

	function SocialMedia_metaboxes_scripts(){
		global $typenow; 
		if ($typenow=='page' || $typenow=='post'){
			wp_register_style('wd_font_awesome',Social_Media_Url.'css/wd_font_awesome/css/wd_font_awesome.css');					
		}
		if ($typenow=='socialmedia_cpt'){
			$dataToBePassed = array('Social_Media_Url'  => Social_Media_Url);
			wp_enqueue_script( 'jquery');
			wp_enqueue_script('jquery-ui-draggable');			

			/** metabox style**/
			wp_enqueue_style('SocialMedia_metaboxes_style',Social_Media_Url.'admin/css/metaboxes_style.css');

			/********/

			/*****icons****/
			wp_enqueue_style('SocialMedia_font_awesome',Social_Media_Url.'css/wd_font_awesome/css/wd_font_awesome.css');					
			
			/***live preview******/

			wp_enqueue_script( 'SocialMedia_preview', Social_Media_Url.'admin/js/button_preview.js', array(), false, true );
			
			$localize_array=array('SocialMedia_preview'=>$dataToBePassed);

			foreach ($localize_array as $key => $value) {
				wp_localize_script( $key, 'php_vars', $value );
			}

			
		}	

	}
}
?>