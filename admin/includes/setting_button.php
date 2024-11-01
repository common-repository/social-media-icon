<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
require(Social_Media_Path.'admin/includes/custom_setting_get.php');
?>

<div class="wdbutton_preview_box">
	<h2 class="header"><?php _e('Live Preview','social-media'); ?></h2>
	<div class="wdbutton_preview_style"></div>	
	<div class="wdbutton_live">
		
	</div>
	
	<h3 style=" text-align:center;"><?php _e('Social Media Group','social-media'); ?></h3>
</div>
<div class="wdbutton_settings_box">
	
	<div class="wrapper btn_set">
		<?php require_once(Social_Media_Path.'admin/setting_UI/btn_sets_setting/btn_sets_settings.php');  ?>
	</div>
</div>