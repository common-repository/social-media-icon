<?php 
/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class SocialMedia_shortcode_class
{
	
	function __construct()
	{
		add_shortcode( 'Social_Media', array(&$this, 'Socialmedia_shortcode') );
		
	}
	

	function Socialmedia_shortcode($post){
		ob_start();
		$id=$post['id'];
		$ids=explode(",", $id);
		
		foreach ($ids as $id) {
			if(isset($id)){
				$custom_data = unserialize(get_post_meta($id,'socialmedia_custom_setting_'.$id, true));

				wp_register_style('wd_font_awesome',Social_Media_Url.'css/wd_font_awesome/css/wd_font_awesome.css');

				?> <style type="text/css"><?php echo $custom_data['custom_css']; ?></style><?php
				
				if($custom_data['sm_layout']=="social_button_set_with_icon"){
					require(Social_Media_Path.'user_view/button_layouts/social_button_sets/social_button_set_with_icon/social_button_set_with_icon.php');
				}

			}		
		}	
		
		return ob_get_clean();
	}
}
?>