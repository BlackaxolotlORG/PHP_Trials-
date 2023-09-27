<?php
$pageTitle = "Locations";


include '../sources/header.php'; ?>

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


<?php
// Function to calculate the distance between two coordinates using the Haversine formula.
function haversine($lat1, $lon1, $lat2, $lon2) {
    $lat1 = deg2rad($lat1);
    $lon1 = deg2rad($lon1);
    $lat2 = deg2rad($lat2);
    $lon2 = deg2rad($lon2);

    $dlat = $lat2 - $lat1;
    $dlon = $lon2 - $lon1;

    $a = sin($dlat / 2) ** 2 + cos($lat1) * cos($lat2) * sin($dlon / 2) ** 2;
    $c = 2 * asin(sqrt($a));
    $radius = 6371; // Radius of the Earth in kilometers

    return $radius * $c;
}

// User's location (you can get this from user input or device location)
$userLatitude = 40.728157;
$userLongitude = -74.077644;

// Connect to your MySQL database (replace with your credentials)
$host = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select stores and calculate distances
$sql = "SELECT id, name, latitude, longitude, (6371 * ACOS(COS(RADIANS($userLatitude)) * COS(RADIANS(latitude)) * COS(RADIANS(longitude) - RADIANS($userLongitude)) + SIN(RADIANS($userLatitude)) * SIN(RADIANS(latitude)))) AS distance FROM stores ORDER BY distance ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Nearest Stores:</h2>";
    while ($row = $result->fetch_assoc()) {
        echo "Store Name: " . $row["name"] . "<br>";
        echo "Distance: " . round($row["distance"], 2) . " km<br><br>";
    }
} else {
    echo "No stores found.";
}

$conn->close();
?>


</body>
</html>
