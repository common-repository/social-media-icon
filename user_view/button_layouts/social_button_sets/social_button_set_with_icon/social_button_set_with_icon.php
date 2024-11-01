<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php 
wp_enqueue_style('wd_font_awesome');
require(Social_Media_Path.'user_view/button_layouts/social_button_sets/social_button_set_with_icon/css/social_button_set_with_icon_style.php');
?>

<?php 

$my_arr=array(
	'Facebook'=>array('status'=>$custom_data['facebook_icon'],    'url'=>$custom_data['facebook_url'],    'class'=>'wd_btn_facebook',      'icon'=>'facebook'),
	'Twitter'=>array('status'=>$custom_data['twitter_icon'],      'url'=>$custom_data['twitter_url'],     'class'=>'wd_btn_twitter',      'icon'=>'twitter'),
	'Google +'=>array('status'=>$custom_data['google_icon'],      'url'=>$custom_data['google_url'],      'class'=>'wd_btn_googleplus',   'icon'=>'google-plus'),
	'Pinterest'=>array('status'=>$custom_data['pinterest_icon'],  'url'=>$custom_data['pinterest_url'],   'class'=>'wd_btn_pinterest',     'icon'=>'pinterest'),
	'Linkedin'=>array('status'=>$custom_data['linkedin_icon'],    'url'=>$custom_data['linkedin_url'],    'class'=>'wd_btn_linkedin',      'icon'=>'linkedin'),
	'Instagram'=>array('status'=>$custom_data['instagram_icon'],  'url'=>$custom_data['instagram_url'],   'class'=>'wd_btn_instagram',     'icon'=>'instagram'),
	'Vimeo'=>array('status'=>$custom_data['vimeo_icon'],          'url'=>$custom_data['vimeo_url'],       'class'=>'wd_btn_vimeo',   'icon'=>'vimeo-square'),
	'Skype'=>array('status'=>$custom_data['skype_icon'],          'url'=>$custom_data['skype_url'],       'class'=>'wd_btn_skype',   'icon'=>'skype'),
	'Youtube'=>array('status'=>$custom_data['youtube_icon'],      'url'=>$custom_data['youtube_url'],     'class'=>'wd_btn_youtube',      'icon'=>'youtube'),
	'Tumblr'=>array('status'=>$custom_data['tumblr_icon'],        'url'=>$custom_data['tumblr_url'],      'class'=>'wd_btn_tumblr',  'icon'=>'tumblr'),
	'Vkontakte'=>array('status'=>$custom_data['vkontakte_icon'],  'url'=>$custom_data['vkontakte_url'],   'class'=>'wd_btn_vkontakte',      'icon'=>'vk'),
	'Stack Overflow'=>array('status'=>$custom_data['stack_overflow_icon'], 'url'=>$custom_data['stack_overflow_url'],'class'=>'wd_btn_stack_overflow', 'icon'=>'stack-overflow'),
	'Slack'=>array('status'=>$custom_data['slack_icon'],          'url'=>$custom_data['slack_url'],       'class'=>'wd_btn_slack',   'icon'=>'slack'),
	'Github'=>array('status'=>$custom_data['github_icon'],        'url'=>$custom_data['github_url'],      'class'=>'wd_btn_github',     'icon'=>'github'),
	'Comments'=>array('status'=>$custom_data['comments_icon'],    'url'=>$custom_data['comments_url'],    'class'=>'wd_btn_comments',    'icon'=>'comments'),
	'Email'=>array('status'=>$custom_data['email_icon'],          'url'=>$custom_data['email_url'],       'class'=>'wd_btn_email',   'icon'=>'envelope'),
	'Dribbble'=>array('status'=>$custom_data['dribbble_icon'],    'url'=>$custom_data['dribbble_url'],    'class'=>'wd_btn_dribbble','icon'=>'dribbble'),
	'Flickr'=>array('status'=>$custom_data['flickr_icon'],    'url'=>$custom_data['flickr_url'],    	  'class'=>'wd_btn_flickr','icon'=>'flickr'),
	'Dropbox'=>array('status'=>$custom_data['dropbox_icon'],    'url'=>$custom_data['dropbox_url'],    	  'class'=>'wd_btn_dropbox','icon'=>'dropbox'),
	'Xing'=>array('status'=>$custom_data['xing_icon'],    'url'=>$custom_data['xing_url'],    			  'class'=>'wd_btn_xing','icon'=>'xing'),
	'Tencent Weibo'=>array('status'=>$custom_data['tencent_weibo_icon'],'url'=>$custom_data['tencent_weibo_url'],  'class'=>'wd_btn_tencent_weibo','icon'=>'tencent-weibo'),
	);
	?>

	<div id="social_platforms">
		
		<?php 


		foreach ($my_arr as $name_btn => $value) {  

			if($value['status']==1){ ?> <a  href="<?php echo esc_url($value['url']); ?>" target="_blank" class="wd_btn wd_btn_icon <?php echo esc_attr($value['class']); ?>"><i class="fa fa-<?php echo esc_attr($value['icon']); ?>"></i> <span><?php echo esc_attr($name_btn); ?></span></a> <?php }
		}
		?>

	</div>