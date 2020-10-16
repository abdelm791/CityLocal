<!-- header file -->
<?php require_once('includes/header.php'); ?>
    
<?php

echo '<h1> Bienvenue à notre site web</h1> <br/>
<h2> Vous trouverez ici tous les informations nécessaire concernant votre ville de choix.<br/>'
 
?>

<div>
<button id = "find-me">

<?php echo 'Show my location' ?></button><br/>
<p id = "status"></p>
<a id = "map-link" target="_blank"></a>
<script>
  function geoFindMe() {

const status = document.querySelector('#status');
const mapLink = document.querySelector('#map-link');

mapLink.href = '';
mapLink.textContent = '';

function success(position) {
const latitude  = position.coords.latitude;
const longitude = position.coords.longitude;

status.textContent = '';
mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
}

function error() {
status.textContent = 'Unable to retrieve your location';
}

if(!navigator.geolocation) {
status.textContent = 'Geolocation is not supported by your browser';
} else {
status.textContent = 'Locating…';
navigator.geolocation.getCurrentPosition(success, error);
}

}

document.querySelector('#find-me').addEventListener('click', geoFindMe);


  </script>

</div>
<!-- footer file -->
<?php require_once('includes/footer.php'); ?>