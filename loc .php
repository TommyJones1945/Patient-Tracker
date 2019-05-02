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