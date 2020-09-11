<section id="map">
	<div  class="map">
		<input class="d-none type="text" value=" <?php echo cs_get_option('mapa_latitud'); ?> " id="mapa_latitud" ">
		<input class="d-none type="text" value=" <?php echo cs_get_option('mapa_longitud'); ?> " id="mapa_longitud" ">
	</div>
</section>


<script>
  
// 
// Google Map
// 
jQuery(document).ready(function() { 
    var long_valor = document.getElementById("mapa_latitud").value;
    var lati_valor = document.getElementById("mapa_longitud").value;
    var centerPosition = new google.maps.LatLng(long_valor, lati_valor, 16);
    var position_reference = new google.maps.LatLng(long_valor , lati_valor, 16);
    var style = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "labels.icon",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    }
]
    var options = {
        scrollwheel: false,
        zoom: 17,
        center: centerPosition,
        draggable: false,//Desactiva los gestos con el raton
        keyboardShortcuts: false,//Desactiva  el zoom con el + y -
        navigationControl: false,
        streetViewControl: false, //Define al hombrecito del Streep
        mapTypeControlOptions: false,
        disableDefaultUI: true,//Desactiva la escala
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map'), options);
    map.setOptions({
        styles: style
    });
    var image = {
        url: 'https://static.lennox.com/img/icons/flood-search-pin.svg',
        anchor: new google.maps.Point(30, 30.26),
        size: new google.maps.Size(60,30.26),
        draggable: false,
        };
    var shadow = {
        url: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKms9GAp1BAL5LThlUEEDeW15b7knda8l_hVetewuEckaQfDBwUleozmk',
        origin: new google.maps.Point(0, 0),
    };
    var marker = new SVGMarker({
        position: position_reference,
        map: map,
        icon: image,
        shadow: shadow
    });
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center);
    });
});
</script>