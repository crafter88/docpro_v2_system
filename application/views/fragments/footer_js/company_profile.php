<!-- <script>
  function initMap() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
  $('div').click(function(){
  	 google.maps.event.trigger(map, "resize");
  });
 
   
</script> -->

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTdn0y9CUgqyKR2uFRtLobMubUg3boyCU&callback=initMap"> -->
<!-- </script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTdn0y9CUgqyKR2uFRtLobMubUg3boyCU"></script>
<script>
	function initialize() {
		var infowindow = new google.maps.InfoWindow();
		function makeInfoWindowEvent(map, infowindow, contentString, marker) {
		  google.maps.event.addListener(marker, 'click', function() {
		    infowindow.setContent(contentString);
		    infowindow.open(map, marker);
		  });
		}
		var myLatLng = {lat: 16.41381834, lng: 120.59675509};

		var mapCanvas = document.getElementById('map');
		var mapOptions = {
			center: myLatLng,
			zoom: 18,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		}
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var marker = new google.maps.Marker({
			position: myLatLng,
			map: map,
			title: 'DocPro Business Solutions'
		});

		let template = $('#company-information').html();
		makeInfoWindowEvent(map, infowindow, template, marker);				
	}			  
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
