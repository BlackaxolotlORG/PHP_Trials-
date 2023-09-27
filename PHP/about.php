<?php
$pageTitle = "About";

include '../sources/header.php'; ?>
<h1>Hello world</h1>
<p>Made by: Diego</p>
<p>Current DAte: </p>
<p> This is the about page, this website was created to test my php skills</p>


<hr>
    <h1>Example of getting user location</h1>
    <p>Click the button to get your location:</p>
    <button onclick="getUserLocation()">Get Location</button>
    <p>Your location:</p>
    <p id="location"></p>

    <script>
        function getUserLocation() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var latitude = position.coords.latitude;
                    var longitude = position.coords.longitude;
                    var locationText = "Latitude: " + latitude + "<br>Longitude: " + longitude;
                    document.getElementById("location").innerHTML = locationText;
                });
            } else {
                document.getElementById("location").innerHTML = "ERROR Geolocation is not supported by your browser.";
            }
        }
    </script>
</body>
</html>