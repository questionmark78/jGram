jQuery.noConflict();
jQuery(document).ready(function($){

	// Output Instagram feed and user parameters
	var user_info 	= $("#instafeed").attr("class");
	var results 	= user_info.split(" ");

	//convert string to boolean value
	var links_bool_value = results[8] == "true" ? true : false

	//fancybox
	if($('#instafeed').hasClass('false')){
		var fancyTemplate = '<a class="fancybox-buttons" data-fancybox-group="button" href="#"><img src="{{image}}" /></a>';
		$("#instafeed img").fancybox();
	}

	//bubble display
	if($('#instafeed').hasClass('bubbles_on')){
		$('#instafeed').removeClass('columns_0');
		$('#instafeed').removeClass('columns_1');
		$('#instafeed').removeClass('columns_2');
		$('#instafeed').removeClass('columns_3');
		$('#instafeed').removeClass('columns_4');
	}
	function randomPos(){
		$(window).on('load', function(){
			$('#instafeed.bubbles_on a').each(function(){
				$(this).css({
					'top'	 : Math.floor((Math.random() * 350) + 1)+'px',
					'left'	 : Math.floor((Math.random() * 350) + 1)+'px',
				});

				var min 		= 80;
				var max 		= 150;
				var widthHeight = Math.floor(Math.random() * (max - min + 1)) + min;
				$(this).width(widthHeight);
				$(this).height($(this).width());
			});
		});
	}	
	randomPos();

		function randomMovement(){
				$(window).on('load', function(){
						var min 		= -100;
						var max 		= 100;
						var minTime 	= 4000;
						var maxTime 	= 6000;
						setInterval(function(){
							$('#instafeed.bubbles_on a').each(function(){
								$(this).animate({
									'margin-top' 	: Math.floor(Math.random() * (max - min + 1)) + min+'px',
									'margin-left'	: Math.floor(Math.random() * (max - min + 1)) + min+'px',
								}, Math.floor(Math.random() * (maxTime - minTime + 1)) + minTime, "linear");
							});


						}, 2000);
				});
		}

		randomMovement();


	var feed = new Instafeed({
	  get 			: results[0],
	  tagName 		: results[1],
	  clientId 		: results[2],
	  accessToken 	: results[3],
	  userId 		: parseInt(results[4]),
	  limit 		: parseInt(results[5]),
	  links 		: links_bool_value,
	  template 		: fancyTemplate,
	  resolution	: "standard_resolution"
	});
	feed.run();

});