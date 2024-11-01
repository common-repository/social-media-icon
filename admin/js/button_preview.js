jQuery(function(){

	jQuery(".wdbutton_preview_box").draggable({});	
	var Social_Media_Url=php_vars.Social_Media_Url;
	var myInterval;
	var sm_layout;
	var sm_layout_checked=jQuery('input[name=sm_layout]:checked').val();
	

	myIntervalstart(sm_layout_checked);

	jQuery('input[name=sm_layout]').click(function(){
		sm_layout=jQuery(this).val();
		myIntervalstop();
		if(sm_layout!= undefined){
			myIntervalstart(sm_layout);
		}		
	});	

	function myIntervalstart(sm_layout) {
		myInterval=setInterval(function(){
			button_preview(sm_layout);
		},500);
	}
	
	function myIntervalstop() {
		clearInterval(myInterval);
	}

	function button_preview(sm_layout){
		var button_data=preview_data_store();
		

		if(sm_layout=='social_button_set_with_icon'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_1'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_2'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_3'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_4'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_5'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_6'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_7'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_8'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}else if(sm_layout=='social_model_9'){
			preview_button(button_data,sm_layout);			
			hover_preview_button(button_data,sm_layout);
		}				
	}

	
	function preview_button(button_data,sm_layout){
		var button_html;	
		
		var style;
		button_html=abc(sm_layout,style,button_data);		
		jQuery(".wdbutton_preview_box .wdbutton_live").html(button_html);

	}

	function hover_preview_button(button_data,sm_layout){		
		var button_hover_html;

		var hover_style;		
		button_hover_html=abc(sm_layout,hover_style,button_data);
		jQuery(".wdbutton_preview_box .wdbutton_live_hover").html(button_hover_html);

	}

	function abc(sm_layout,style,button_data){
		var button_html;
		
		if(sm_layout=='social_button_set_with_icon'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/button_sets.png">';
			
		}else if(sm_layout=='social_model_1'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_1.png">';
			
		}else if(sm_layout=='social_model_2'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_2.png">';
			
		}else if(sm_layout=='social_model_3'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_3.png">';
			
		}else if(sm_layout=='social_model_4'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_4.png">';
			
		}else if(sm_layout=='social_model_5'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_5.png">';
			
		}else if(sm_layout=='social_model_6'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_6.png">';
			
		}else if(sm_layout=='social_model_7'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_7.png">';
			
		}else if(sm_layout=='social_model_8'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_8.png">';
			
		}else if(sm_layout=='social_model_9'){
			button_html='<img src="'+Social_Media_Url+'images/button_sets/social_model_9.png">';
			
		}

		return button_html;
	}
	

	function preview_data_store(){
		var myarr={};
		jQuery( ".wdbutton_settings_box input[type=text]" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val(); 
		});

		jQuery( ".wdbutton_settings_box input[type=number]" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val(); 
		});

		jQuery( ".wdbutton_settings_box input[type=checkbox]:checked" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val(); 
		});

		jQuery( ".wdbutton_settings_box input[type=radio]:checked" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val(); 
		});
		
		jQuery( ".wdbutton_settings_box select" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val();
		});

		jQuery( ".button_effect_section input[type=number]" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val(); 
		});

		jQuery( ".button_effect_section input[type=text]" ).map(function(n,i) {		
			myarr[ this.id ] = jQuery(this).val(); 
		});

		jQuery( ".button_effect_section input[type=radio]:checked" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val(); 
		});

		jQuery( ".button_effect_section select" ).map(function(n,i) {		
			myarr[ this.name ] = jQuery(this).val();
		});

		return myarr;		
	}

	
});