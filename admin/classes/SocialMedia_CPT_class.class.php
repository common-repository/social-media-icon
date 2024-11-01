<?php 
/**
* 
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class SocialMedia_CPT_class 
{
	
	function __construct(){
		add_action( 'init', array(&$this,'SocialMedia_CPT'));
		add_action('media_buttons_context', array(&$this,'SocialMedia_custom_button'),17);	
		add_action('admin_footer', array(&$this,'SocialMedia_button_popup_content'));
		add_action('in_admin_header',array(&$this,'SocialMedia_header_info')); 	
	}

	function SocialMedia_CPT(){
		require_once(Social_Media_Path.'admin/includes/BUTTON_CPT.php');

		function SocialMedia_icon_cpt($id,$custom_data,$path){
			?>
			<div class="wd_button_container">			
				<div>
					<?php require(Social_Media_Path.'user_view/button_layouts/'.$path); ?>			
				</div>						
				<div class="clear_fix"></div>
			</div>
			<?php
		}
		
	}

	function socialmedia_cpt_columns($columns){
		$columns = array(
			'cb' => '<input type="checkbox" />',
			'title' => __( 'Title' ),
			'button_style' => __( 'Social Media' ),
			'shortcode' => __( 'Shortcode' ),
			'date' => __( 'Date' )
			);
		return $columns;
	}

	function SocialMedia_manage_columns($columns,$post_id){
		global $post;
		switch( $columns ) {
			case 'shortcode' :
			echo '<input type="text" value="[Social_Media  id='.$post_id.']" onclick="jQuery(this).select()" readonly="readonly" />';
			break;
			case 'button_style' :

			$custom_data = unserialize(get_post_meta(get_the_ID(),'socialmedia_custom_setting_'.$post_id, true));
			

			if($custom_data['sm_layout']=="social_button_set_with_icon"){			
				SocialMedia_icon_cpt($post_id,$custom_data,'social_button_sets/social_button_set_with_icon/social_button_set_with_icon.php');

			}
			break;
			default :
			break;
		}
	}

	function SocialMedia_custom_button($context){
		$context .= '<a class="button thickbox"  title="'."Select Button Title to insert into post".'"  
		href="#TB_inline?width=400&inlineId=Socialmedia_div">
		<span class="wp-media-buttons-icon" style="background: url('.Social_Media_Url.'/images/SocialMedia_cpt_icon.png); background-repeat: no-repeat; background-position: left bottom;"></span>
		Social Media Shortcode</a>';
		return $context;
	}

	function SocialMedia_button_popup_content(){
		require(Social_Media_Path.'admin/includes/page_post_custom_button.php');		
	}

	function SocialMedia_header_info(){
		if(get_post_type()=='socialmedia_cpt') {
			?>
			<style type="text/css">
			.wdbutton_ac_h_i{
				background:url('<?php echo Social_Media_Url.'images/socialmedia-header.jpg'; ?>') 50% 0 repeat fixed;
			}
			</style>
			<div class="wdbutton_ac_h_i ">
				<div class="wdbutton_container">
					<a href="<?php echo esc_url('http://webdzier.com/'); ?>" target="_blank">
						<a class="wpsm-rate-us" style=" text-decoration: none; height: 40px; width: 40px;" href="https://wordpress.org/support/plugin/social-media-icon/reviews/?filter=5" target="_blank">
							<span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
							<span class="dashicons dashicons-star-filled"></span>
						</a>
						<div class="link_wdbutton">
							<a href="<?php echo esc_url('http://webdzier.com/plugins/social-media-icon-pro/'); ?>" target="_blank" class="get_support_btn"><?php _e("Buy Now $5","social-media"); ?></a>
							<a href="<?php echo esc_url('http://webdzier.com/plugins/social-media-icon/'); ?>" target="_blank" class="view_demo_btn"><?php _e("View Demo","social-media"); ?></a>							
							<a href="<?php echo esc_url('http://wordpress.org/support/plugin/social-media-icon'); ?>" target="_blank" class="get_support_btn"><?php _e("Get Support","social-media"); ?></a>
						</div>
						
					</a>
				</div>
			</div>
			<?php
		}
	}

}

?>