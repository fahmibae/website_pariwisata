<?php ?>
<!DOCTYPE html>
<html>
<head>
<meta charset=”utf-8″>
<title>Weather layer</title>
<style>
html, body, #map-canvas {
height: 100%;
margin: 0px;
padding: 0px
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADJ8pMntMDiPZQbmWpvbwrSGh9laoHoRg&libraries=places,geometry"></script>
<script>
function initialize() {
var mapOptions = {
zoom: 6,
center: new google.maps.LatLng(-7.716165,110.33540300000004)
};

var map = new google.maps.Map(document.getElementById(‘map-canvas’),
mapOptions);

var weatherLayer = new google.maps.weather.WeatherLayer({
temperatureUnits: google.maps.weather.TemperatureUnit.FAHRENHEIT
});
weatherLayer.setMap(map);

var cloudLayer = new google.maps.weather.CloudLayer();
cloudLayer.setMap(map);
}

google.maps.event.addDomListener(window, ‘load’, initialize);

</script>
</head>
<body>
<div id=”map-canvas”></div>
</body>
</html>
<?php ?>