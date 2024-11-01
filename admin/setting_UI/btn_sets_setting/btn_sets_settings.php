<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>

<?php 
$my_arr=array(
	'facebook'=>array('class'=>'btn-fb',      'icon'=>'facebook'),
	'twitter'=>array('class'=>'btn-tw',      'icon'=>'twitter'),
	'google +'=>array('class'=>'btn-gplus',   'icon'=>'google-plus'),
	'pinterest'=>array('class'=>'btn-pin',     'icon'=>'pinterest'),
	'linkedin'=>array('class'=>'btn-li',      'icon'=>'linkedin'),
	'instagram'=>array('class'=>'btn-ins',     'icon'=>'instagram'),
	'vimeo'=>array('class'=>'btn-vimeo',   'icon'=>'vimeo-square'),
	'skype'=>array('class'=>'btn-skype',   'icon'=>'skype'),
	'youtube'=>array('class'=>'btn-yt',      'icon'=>'youtube'),
	'tumblr'=>array('class'=>'btn-tumblr',  'icon'=>'tumblr'),
	'vkontakte'=>array('class'=>'btn-vk',      'icon'=>'vk'),
	'stack overflow'=>array('class'=>'btn-so', 'icon'=>'stack-overflow'),
	'slack'=>array('class'=>'btn-slack',   'icon'=>'slack'),
	'github'=>array('class'=>'btn-git',     'icon'=>'github'),
	'comments'=>array('class'=>'btn-comm',    'icon'=>'comments'),
	'email'=>array('class'=>'btn-email',   'icon'=>'envelope'),
	'dribbble'=>array('class'=>'btn-dribbble','icon'=>'dribbble'),
	'flickr'=>array('class'=>'btn-flickr','icon'=>'flickr'),
	'dropbox'=>array('class'=>'btn-dropbox','icon'=>'dropbox'),
	'xing'=>array('class'=>'btn-xing','icon'=>'xing'),
	'tencent weibo'=>array('class'=>'btn-tencent-weibo','icon'=>'tencent-weibo'),
	);

	?>

	

	<div class="container btn_sets_settings">
		<h2 class="home_title"><?php _e( 'Social Media Settings', 'social-media' ); ?></h2>
		<?php
		foreach ($my_arr as $name => $value) {  
			$name_btn=str_replace(" ", "_", str_replace(" +", "", $name));
			?> 


			<div class="input_group">
				<div class="input_label">			
					<a class="btn <?php echo esc_attr($value['class']); ?>"><i class="fa fa-<?php echo esc_attr($value['icon']); ?> left"></i> <?php echo esc_attr($name); ?></a> 
				</div>
				<div class="input_field">
					<input type="checkbox" name="<?php echo esc_attr($name_btn); ?>_icon" value="1" <?php if($custom_data[$name_btn.'_icon']==1){ _e("checked","social-media");} ?>>
					<label><?php _e( 'Show This Button.', 'social-media' ); ?></label>						
				</div>
				<div class="input_field">
					<label style="margin-top:0;"><?php _e("URL : ",'social-media'); ?></label>
					<input type="text" name="<?php echo esc_attr($name_btn); ?>_url" class="input_box social_url" value="<?php echo esc_attr($custom_data[$name_btn.'_url']); ?>" placeholder="<?php _e("http://","social-media"); ?>">
				</div>
				<div class="clear_fix"></div> 
			</div>

			<?php 

		}
		?>
		<div>
			
			<h1 align='center' style="">Custom Css</h1>
			<textarea  name="custom_css" style="width:100%; height:130px;background:#DDE0E1;" placeholder="Enter Your style"><?php echo esc_attr($custom_data['custom_css']); ?></textarea>
			<p><?php _e("Enter Css without","social-media"); ?> <strong>&lt;style&gt; &lt;/style&gt; </strong> tag.</p>
		</div>
	</div>