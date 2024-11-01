<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
wp_enqueue_style('socialmedia_post_page',Social_Media_Url.'admin/css/post_and_page_button.css');
?>
<div id="Socialmedia_div" style="display:none;">
	<h2 align="center"><?php _e("Social Media Shortcode","social-media"); ?></h2>
	<?php 
	$All_posts = wp_count_posts('socialmedia_cpt')->publish;
	$ARGSM= array('post_type'=>'socialmedia_cpt','posts_per_page'=>$All_posts);			
	$button_short=new wp_Query($ARGSM);
	if($button_short->have_posts()){
		
		while($button_short->have_posts()):$button_short->the_post();
		$custom_data = unserialize(get_post_meta(get_the_ID(),'socialmedia_custom_setting_'.get_the_ID(), true));
		$id=get_the_ID();		
		
		if($custom_data['sm_layout']=="social_button_set_with_icon"){			
			SocialMedia_custom_btn($id,$custom_data,'social_button_sets/social_button_set_with_icon/social_button_set_with_icon.php');

		}
		endwhile;
	}else{
		echo __( "<h2>Empty</h2>",'social-media' );
	}


	function SocialMedia_custom_btn($id,$custom_data,$path){
		?>
		<div class="wd_button_container">
			<h2 align="center"><?php the_title(); ?></h2>
			<div class="col-2">

				<?php require(Social_Media_Path.'user_view/button_layouts/'.$path); ?>			
			</div>	
			<div class="col-2">
				<button class="btn_insert" value="<?php echo $id;?>"><?php _e("Use This Social Group","social-media"); ?></button>
			</div>				
			<div class="clear_fix"></div>
		</div>
		<?php
	}

	function SocialMedia_btn_set($src,$id){
		?>
		<div class="wd_button_container">
			<h2 align="center"><?php the_title(); ?></h2>
			<div class="col-2">
				<img src="<?php echo $src;?>">
			</div>
			<div class="col-2">
				<button class="btn_insert" value="<?php echo $id;?>"><?php _e("Use This Social Group","social-media"); ?></button>
			</div>				
			<div class="clear_fix"></div>
		</div>
		<?php
	}
	?>
</div>
<script type="text/javascript">
jQuery(function(){
	jQuery('.wd_button_container a').click(function(e){
		e.preventDefault();
	});

	jQuery('.btn_insert').click(function(){
		var button_id=jQuery(this).val();
		window.send_to_editor('<p>[Social_Media id='+button_id+']</p>');
		tb_remove();
	});

});
</script>