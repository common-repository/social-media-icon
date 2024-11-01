<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
$default_setting=serialize(array(
	'sm_layout'=>__('social_button_set_with_icon','social-media'),
	
	/*button sets*/

	'facebook_icon'=>1,
	'twitter_icon'=>1,
	'google_icon'=>1,
	'pinterest_icon'=>1,
	'linkedin_icon'=>1,
	'instagram_icon'=>1,
	'vimeo_icon'=>1,
	'skype_icon'=>1,
	'youtube_icon'=>1,
	'tumblr_icon'=>1,
	'vkontakte_icon'=>1,
	'stack_overflow_icon'=>1,
	'slack_icon'=>1,
	'github_icon'=>1,
	'comments_icon'=>1,
	'email_icon'=>1,
	'dribbble_icon'=>1,
	'flickr_icon'=>1,
	'dropbox_icon'=>1,
	'xing_icon'=>1,
	'tencent_weibo_icon'=>1,

	'facebook_url'=>'#',
	'twitter_url'=>'#',
	'google_url'=>'#',
	'pinterest_url'=>'#',
	'linkedin_url'=>'#',
	'instagram_url'=>'#',
	'vimeo_url'=>'#',
	'skype_url'=>'#',
	'youtube_url'=>'#',
	'tumblr_url'=>'#',
	'vkontakte_url'=>'#',
	'stack_overflow_url'=>'#',
	'slack_url'=>'#',
	'github_url'=>'#',
	'comments_url'=>'#',
	'email_url'=>'#',
	'dribbble_url'=>'#',
	'flickr_url'=>'#',
	'dropbox_url'=>'#',
	'xing_url'=>'#',
	'tencent_weibo_url'=>'#',
	'custom_css'=>'',
	
	));

add_option("socialmedia_Default_Setting",$default_setting);
?>