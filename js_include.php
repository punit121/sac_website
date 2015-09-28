<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="//maps.googleapis.com/maps/api/js"></script>
<script src="js/js-image-slider.js"></script>
<script src="js/navbar.js"></script>
<script>
			function initMap() {
  var myLatLng = {lat: 22.3194444, lng: 87.30972222};

  var map = new google.maps.Map(document.getElementById('googleMap'), {
    zoom: 17,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Office of Alumni Affairs and International Relations'
  });
}
google.maps.event.addDomListener(window, 'load', initMap);


  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
 
  
  