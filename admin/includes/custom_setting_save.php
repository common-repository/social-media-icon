<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
if(isset($post) && isset($_POST['sm_layout']))
{
	$btn_array =array();
	$key_array=array(
		'sm_layout',
		
		
		/*button sets*/
		
		'facebook_icon',
		'twitter_icon',
		'google_icon',
		'pinterest_icon',
		'linkedin_icon',
		'instagram_icon',
		'vimeo_icon',
		'skype_icon',
		'youtube_icon',
		'tumblr_icon',
		'vkontakte_icon',
		'stack_overflow_icon',
		'slack_icon',
		'github_icon',
		'comments_icon',
		'email_icon',
		'dribbble_icon',
		'flickr_icon',
		'dropbox_icon',
		'xing_icon',
		'tencent_weibo_icon',


		'facebook_url',
		'twitter_url',
		'google_url',
		'pinterest_url',
		'linkedin_url',
		'instagram_url',
		'vimeo_url',
		'skype_url',
		'youtube_url',
		'tumblr_url',
		'vkontakte_url',
		'stack_overflow_url',
		'slack_url',
		'github_url',
		'comments_url',
		'email_url',
		'dribbble_url',
		'flickr_url',
		'dropbox_url',
		'xing_url',
		'tencent_weibo_url',
		'custom_css',

		);
	foreach ($key_array as $value) 
	{
		$btn_array[$value] =sanitize_text_field($_POST[$value]);
	}
	$btn_array = serialize($btn_array);			
	update_post_meta($post,'socialmedia_custom_setting_'.$post,$btn_array);
}
?>