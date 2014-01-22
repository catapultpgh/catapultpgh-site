$(document).ready(function() {

	// // Mark current menu item
	// $('.nav li a').each(function(index) {
 //        if(this.href.trim() == window.location)
 //            $(this).addClass('current');
 //    });

	// // Simple tabs for Community page
	// $('.tabs li a').click(function(e){
	// 	e.preventDefault();
	// 	// Remove active tab style from all tabs
	// 	$('.tabs li a').each(function(e){
	// 		$(this).removeClass('current');
	// 	});

	// 	// Add active tab style to clicked tab
	// 	$(this).addClass('current');

	// 	// Hide/show the tab's associated section
	// 	var tab = $(this).attr('href');
	// 	$('.tab-content').removeClass('current-section');
	// 	$('.tab-content').each(function(){
	// 		$(this).hide();
	// 	});

	// 	$('.tab-content'+tab).fadeIn();

	// 	// Remove link functionality
	// 	return false;
	// });

	// $('.nav-arrow').click(function() {
	// 	var next_section = $(this).parents('.content-unit').next('.content-unit');
      		
	// 	$('html,body').animate({
 //  			scrollTop: next_section.offset().top
 //    	}, 1000);
	// });

		// $(window).scroll(function () {
		// 	if ($(this).scrollTop() > 100) {
		// 		$('#back-top').fadeIn();
		// 	} else {
		// 		$('#back-top').fadeOut();
		// 	}
		// });

		// // scroll body to 0px on click
		// $('#back-top a').click(function () {
		// 	$('body,html').animate({
		// 		scrollTop: 0
		// 	}, 500);
		// 	return false;
		// });



});