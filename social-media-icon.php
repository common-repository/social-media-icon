<?php 
/*
Plugin Name: Social Media Icon
Plugin URI: http://webdzier.com
Description: Generator fantabulous social icon. You can create multiple shortcode in widget. <a href="http://webdzier.com">Get Pro version</a>.
Version: 1.2
Author: webdzier
Author URI: http://webdzier.com
Text Domain: social-media 
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) exit;

define("Social_Media_Url", plugin_dir_url(__FILE__));
define('Social_Media_Path',plugin_dir_path(__FILE__));

add_action('plugins_loaded', 'SocialMedia_GetReadyTranslation');
function SocialMedia_GetReadyTranslation() {
	load_plugin_textdomain('social-media', FALSE, dirname( plugin_basename(__FILE__)).'/languages/' );
}

register_activation_hook(__FILE__, 'SocialMedia_activation_setting');	
function SocialMedia_activation_setting(){
	require_once(Social_Media_Path.'admin/includes/default_setting.php');
}

register_deactivation_hook(__FILE__,'SocialMedia_deactivation_setting');
function SocialMedia_deactivation_setting(){
	delete_option("socialmedia_Default_Setting");
}

require_once(Social_Media_Path.'admin/classes/SocialMedia_sets_style.class.php');

function SocialMedia_current_user(){
	if ( current_user_can( 'administrator' ) ) {
		if(is_admin()){	
			require_once(Social_Media_Path.'admin/classes/SocialMedia_CPT_class.class.php');	
			require_once(Social_Media_Path.'admin/classes/SocialMedia_admin_style_script.class.php');	
			require_once(Social_Media_Path.'admin/classes/SocialMedia_metaboxes_class.class.php');		

			new SocialMedia_CPT_class();
			new SocialMedia_admin_style_script();
			new SocialMedia_sets_style();
			new SocialMedia_metaboxes_class();	
		}	
	}	
}
add_action( 'plugins_loaded', 'SocialMedia_current_user');



require_once(Social_Media_Path.'user_view/classes/SocialMedia_shortcode_class.class.php');
new SocialMedia_sets_style();
new SocialMedia_shortcode_class();


require_once(Social_Media_Path.'admin/classes/widget/SocialMedia_widget.php');
