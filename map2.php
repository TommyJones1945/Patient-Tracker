<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Map</title>
	<style>
	*{
		margin: 0;
		padding: 0;
	}
	#map {
		height: 500px;
		width: 100%;
	}
	</style>
</head>
<body>
<nav>
<a class="nav-right" href="homepage_2_.html">Homepage</a>
</nav>
<div id="map"></div>

<script>
document.getElementById("myBtn").addEventListener("click", changeMarkerPosition);
	function initMap(){
		var location = {lat: 42.314079, lng: -83.036858};
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 15,
			center: location
		});
		var marker = new google.maps.Marker({
			position: location,
			map: map
		});
	}
	function changeMarkerPosition(marker) {
    var latlng = new google.maps.LatLng(-24.397, 140.644);
    marker.setPosition(latlng);
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCf3KA88Zux8rSjIFyhtT65HM1ZRzqJF8k&callback=initMap"></script>
<div>
<br>
<br>
<p>Search for the location of the patients by putting their names in the searchbox</p>
<div class="search-container">
    <form action="" method="post">
      <input id="myBtn" type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
</body>
<?php
/*
$servername = "localhost";
$username = "sladeb";
$password = "Naomi5678";
$dbname = "sladeb_projectDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
*/
include('connect.php');

$conn = $db;

$first_name   = $conn->real_escape_string($_POST['search']);

$sql = "SELECT XValue, YValue FROM Users WHERE FName = '" . $first_name . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$_SESSION["latitude"] = . $row["XValue"].;
		$_SESSION["longtitude"] = . $row["YValue"].;
        echo "<p>item_number: " . $row["item_number"]. "<br />description:" . $row["description"]. "<br />custom1: " . $row["custom1"] . "<br />another_field: " . $row["another_field"] . "</p>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</html>