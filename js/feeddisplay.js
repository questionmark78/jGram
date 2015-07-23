jQuery.noConflict();
jQuery(document).ready(function($){

	var_links_boolean = $('#instafeed').attr('data-links') == "true" ? true : false;

	//fancybox
	if(var_links_boolean == false){
		var fancyTemplate = '<div class="fancybox" data-fancybox-group="button"><a href="#"><img src="{{image}}" /></a>' +
		'<div class="details">' +
		'<div class="caption"><p>{{caption}}</p></div>' +
		'<div class="likes"><p>{{likes}} likes</p><img src="modules/mod_jgram/assets/likes.png" /></div>' +
		'</div>' +
		'</div>';
		$("#instafeed div").fancybox();
	}

	var feed = new Instafeed({
	  get 			: $('#instafeed').attr('data-get-type'),
	  tagName 		: $('#instafeed').attr('data-tag-name'),
	  clientId 		: $('#instafeed').attr('data-client-id'),
	  accessToken 	: $('#instafeed').attr('data-access-token'),
	  userId 		: parseInt($('#instafeed').attr('data-user-id')),
	  limit 		: $('#instafeed').attr('data-limit'),
	  links 		: var_links_boolean,
	  template 		: fancyTemplate,
	  resolution	: "standard_resolution"
	});
	feed.run(); 


});