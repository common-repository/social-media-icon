<?php 

/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class SocialMedia_sets_style
{
	
	function __construct()
	{
		global $post_type;
		add_action('admin_enqueue_scripts', array(&$this,'ScoialMedia_default_style'));
		add_action('wp_enqueue_scripts', array(&$this,'ScoialMedia_default_style'));
	}

	function ScoialMedia_default_style(){	

		global $typenow; 	
		wp_enqueue_style('wd_default_style',Social_Media_Url.'user_view/coman_css/default_style.css');
		wp_register_style('social_model_default',Social_Media_Url.'user_view/coman_css/social_model_default.css');

		//mdb
		
		if ($typenow=='socialmedia_cpt'){
			wp_enqueue_style('SM_compliled',Social_Media_Url.'css/smcompliled.css');
			wp_enqueue_style('SM_mdb',Social_Media_Url.'css/smmdb.css');	
		}

		
	}
}
?>