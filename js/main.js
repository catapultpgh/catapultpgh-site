$(document).ready(function() {

	initialize();

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


    
function initialize() {
  if (GBrowserIsCompatible()) {
    var map = new GMap2(document.getElementById("map_canvas"));
    map.setCenter(new GLatLng(37.4419, -122.1419), 13);

    // Add 10 markers to the map at random locations
    var bounds = map.getBounds();
    var southWest = bounds.getSouthWest();
    var northEast = bounds.getNorthEast();
    var lngSpan = northEast.lng() - southWest.lng();
    var latSpan = northEast.lat() - southWest.lat();
    for (var i = 0; i < 10; i++) {
      var latlng = new GLatLng(southWest.lat() + latSpan * Math.random(),
                              southWest.lng() + lngSpan * Math.random());
      map.addOverlay(new GMarker(latlng));
    }
  }
}

