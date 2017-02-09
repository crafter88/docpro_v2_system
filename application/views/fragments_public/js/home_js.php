<script>
      $(window).scroll(function() {
            var height = $(window).scrollTop();
            if(height > 1)
            {
              $('#top-bar').addClass('white');
            	$('#top-bar').removeClass('dark');
            }else{
              $('#top-bar').removeClass('white');
            	$('#top-bar').addClass('dark');
            }
        });
</script>
<script>
      $(document).ready(function(){
            $('.down').click(function(){
                  var target = "#"+$(this).attr('data-target');
                  $('html, body').stop().animate({
                        scrollTop: $(target).offset().top
                  }, 500);
                  $('#top-menu li').removeClass('active');
                  $('#top-menu').find("a[data-target*="+$(this).attr('data-target')+"]").closest('li').addClass('active');
            });

            $('#top-menu li').removeClass('active');
            var url = window.location.href;
            if(url.includes('home')){
              $('#top-menu').find("a[data-target*=home]").closest('li').addClass('active');
            }
            if(url.includes('about')){
              $('#top-menu').find("a[data-target*=about]").closest('li').addClass('active');
            }
            if(url.includes('contact')){
              $('#top-menu').find("a[data-target*=contact]").closest('li').addClass('active');
            }
      });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTdn0y9CUgqyKR2uFRtLobMubUg3boyCU"></script>
<script>
function initialize() {
    var myLatLng = {lat: 16.413831, lng: 120.596744};

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
        title: 'DOCPRO Business Solutions, CYA Building'
    });                  
}             
google.maps.event.addDomListener(window, 'load', initialize);
</script>