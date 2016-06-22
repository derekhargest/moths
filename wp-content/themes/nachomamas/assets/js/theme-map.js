var color = "#137d79";
var overlay = null;
  function initialize() {
    var myLatLng = {lat: 39.279024, lng: -76.565706};

    var mapCanvas = document.getElementById('map');
    var mapOptions = {
      zoom: 17,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: new google.maps.LatLng(39.278900, -76.568170),
      scrollwheel: false,
      draggable: false,
      disableDefaultUI: true
    }
    var iconBase = '<?php echo esc_url( get_template_directory_uri() ) ?>/images/';

    var map = new google.maps.Map(mapCanvas, mapOptions);
            var marker = new google.maps.Marker({
                map: map,
                position: myLatLng,
                icon: iconBase + 'map-marker.png',
                title: 'Gunther & Co.'
    });
    bounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(-84.999999, -179.999999),
      new google.maps.LatLng(84.999999, 179.999999));

    rect = new google.maps.Rectangle({
        bounds: bounds,
        fillColor: color,
        fillOpacity: 0.5,
        strokeWeight: 0,
        map: map
    });
  }
  google.maps.event.addDomListener(window, 'load', initialize);
