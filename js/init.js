jQuery(function( $ ){
	// hide .navbar first
	$(".navbar").hide();

	var titles = ['The Catalog / Products', 'Seminars'];
	var subtitles = ['Our Farm Products', 'Participate in our seminars to further your knowledge!'];
	$('.front-title').each(function(index){
		$(this).text(titles[index]);
	});
	$('.front-subtitle').each(function(index){
		$(this).text(subtitles[index]);
	});
	$('.explore').each(function(index){
		if(index == 1){
			$(this).remove();
		}
	});
	$('.barn').each(function(index){
		if(index == 1){
			$(this).remove();
		}
	});
	$('.tractor').each(function(index){
		if(index == 1){
			$(this).remove();
		}
	});
	$(function () {
		$(window).scroll(function () {
            // set distance user needs to scroll before we fadeIn navbar
			if ($(this).scrollTop() > 150) {
				$('.navbar').fadeIn();
			} else {
				$('.navbar').fadeOut();
			}
		});

	
	});
	new WOW().init();

  });