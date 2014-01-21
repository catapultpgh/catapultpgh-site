$(document).ready(function() {

	// Mark current menu item
	$('.nav li a').each(function(index) {
        if(this.href.trim() == window.location)
            $(this).addClass('current');
    });

	// Simple tabs for Community page
	$('.tabs li a').click(function(e){
		e.preventDefault();
		// Remove active tab style from all tabs
		$('.tabs li a').each(function(e){
			$(this).removeClass('current');
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
