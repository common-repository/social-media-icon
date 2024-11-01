<?php 

/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class SocialMedia_metaboxes_class
{
	
	function __construct()
	{
		add_action('add_meta_boxes',array(&$this, 'SocialMedia_meta_box_function'));
		add_action('save_post',array(&$this,'SocialMedia_custom_setting_save'));		
	}

	function SocialMedia_meta_box_function(){

		add_meta_box('layout_metabox',  __('Social Media Themes', 'social-media'),array(&$this, 'SocialMedia_layout_select'),
			'socialmedia_cpt','normal','low');
		
		add_meta_box('SocialMedia_setting_metabox', __('Social Media Settings', 'social-media'),array(&$this, 'SocialMedia_setting_metabox'),
			'socialmedia_cpt','normal','low');

		
		add_meta_box('shortcode_meta_box', __('Shortcode', 'social-media'),array(&$this, 'shortcode_meta_box'),
			'socialmedia_cpt','side','low');

		add_meta_box('button_rateus', __('Rate Us If You Like This Plugin', 'social-media'), array(&$this, 'SocialMedia_rateus_function'), 'socialmedia_cpt', 'side', 'low');
	}	

	function SocialMedia_layout_select($post){ 
		require_once(Social_Media_Path.'admin/setting_UI/layouts.php');
	}

	function SocialMedia_setting_metabox($post){ 
		require(Social_Media_Path.'admin/includes/setting_button.php');		
	}	

	function SocialMedia_custom_setting_save($post){
		require_once(Social_Media_Path.'admin/includes/custom_setting_save.php');
	}

	function shortcode_meta_box($post){
		?>	
		<div class="shortcode_meta_box">
			<input type="text" value="<?php echo esc_attr("[Social_Media id=".get_the_ID()."]"); ?>" onclick='jQuery(this).select()' readonly/>
		</div>
		<?php 
	}

	function SocialMedia_rateus_function(){
		require_once(Social_Media_Path.'admin/includes/rate_us.php');		
	}


}
?>