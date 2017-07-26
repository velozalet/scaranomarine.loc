	var map;
	
	var marker;

	var lat;
	var lng;
	
	var ourpoint;
	
	// Supply
	function initialize() {
		var styles = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#3d4044"},{"visibility":"on"}]}];

		// Create a new StyledMapType object, passing it the array of styles,
		// as well as the name to be displayed on the map type control.
		var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
		
		var myOptions = '';
		if (jQuery(window).width() > 767) {
			myOptions = {
				zoom: 12,
				center: new google.maps.LatLng(26.106689,-80.143784),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				panControl: false,
				scaleControl: false,
				scrollwheel: false,
				clickable: false,
				mapTypeControl: false,
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.BOTTOM_LEFT
				}
			}
		}else{
			myOptions = {
				zoom: 12,
				center: new google.maps.LatLng(26.106689,-80.143784),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				panControl: false,
				scaleControl: false,
				scrollwheel: false,
				clickable: false,
				draggable: false,
				mapTypeControl: false,
				zoomControl: true,
				zoomControlOptions: {
					style: google.maps.ZoomControlStyle.LARGE,
					position: google.maps.ControlPosition.BOTTOM_LEFT
				}
			}
		}

		map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
		// Associate the styled map with the MapTypeId and set it to display.
		map.setOptions({styles: styles});
		/**
		* Data for the markers consisting of a name, a LatLng and a zIndex for
		* the order in which these markers should display on top of each
		* other.
		*/
		ourpoint = [
			['Scarano Marine', 26.106689, -80.143784]
		];
		
		google.maps.event.addListener(map, 'idle', function(e) {
    
    // Prevents card from being added more than once (i.e. when page is resized and google maps re-renders)
    if ( jQuery( ".place-card" ).length === 0 ) {
		jQuery(".gm-style").append('<div style="position: absolute; left: 0px; top: 0px;"> <div style="margin: 10px; padding: 1px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; background-color: white;"> <div> <div class="place-card place-card-large"> <div class="place-desc-large"> <div class="place-name"> Scarano Marine</div><div class="address">1218 SW 1st Ave, Fort Lauderdale, FL 33315</div></div><div class="navigate"> <div class="navigate"> <a class="navigate-link" href="https://www.google.com/maps/place/Scarano+Marine/@26.106776,-80.143719,15z/data=!4m2!3m1!1s0x0:0xa449ce496eb54a49?sa=X&ved=0ahUKEwi309jj_c3NAhVCvRQKHYehBekQ_BIIfzAP" target="_blank"> <div class="icon navigate-icon"></div><div class="navigate-text"> Directions </div></a> </div></div><div class="review-box"> <div class="" style="display:none"></div><div class="" style="display:none"></div><div class="" style="display:none"></div><div class="" style="display:none"></div><div class="" style="display:none"></div><div class="" style="display:none"></div></div><div class="saved-from-source-link" style="display:none"> </div><div class="maps-links-box-exp"> <div class="time-to-location-info-exp" style="display:none"> <span class="drive-icon-exp experiment-icon"></span><a class="time-to-location-text-exp" style="display:none" target="_blank"></a><a class="time-to-location-text-exp" style="display:none" target="_blank"></a> </div><div class="google-maps-link"> <a href="https://www.google.com/maps/place/Scarano+Marine/@26.106776,-80.143719,15z/data=!4m2!3m1!1s0x0:0xa449ce496eb54a49?sa=X&ved=0ahUKEwi309jj_c3NAhVCvRQKHYehBekQ_BIIfzAP" target="_blank">View larger map</a> </div></div><div class="time-to-location-privacy-exp" style="display:none"> <div class="only-visible-to-you-exp"> Visible only to you. </div><a class="learn-more-exp" target="_blank">Learn more</a> </div></div></div></div></div>');
		}
	  });
  
		function setMarkers(map, locations) {
		  for (var i = 0; i < locations.length; i++) {
			var beach = locations[i];
			var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: beach[0],
				icon: '/wp-content/themes/scarano_marine/images/icon_map_pin.png'
			});
		  }
			var contentString = '<div id="map-content">'+
				'Scarano Marine'+
				'</div>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString,
				 maxWidth: 440
			});
		  google.maps.event.addListener(marker, 'click', function() {
			infowindow.open(map,marker);
		  });
		}
		setMarkers(map, ourpoint);
	}
	google.maps.event.addDomListener(window, 'load', initialize);