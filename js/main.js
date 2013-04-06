$(document).ready(function() {

	// Mark current menu item
	var url = window.location.pathname;
	$('.nav li a').removeClass('current')
	$('.nav').find('a[href="'+url+'"]')
					.addClass('current');


	// Simple tabs for Community page
	$('.tabs li a').click(function(){

		// Remove active tab style from all tabs
		$('.tabs li a').each(function(e){
			$(this).removeClass('current');
			e.preventDefault;
		});

		$('.tabs li a').each(function(e){
			$(this).removeClass('current');
			e.preventDefault;
		});

		// Add active tab style to clicked tab
		$(this).addClass('current');


		// Hide/show the tab's associated section
		var tab = $(this).attr('href');
		$('.tab-content').removeClass('current-section');
		$('.tab-content').each(function(){
			$(this).hide();
		});

		$('.tab-content'+tab).fadeIn();

		// Remove link functionality
		return false;	
	});

});
