<?php
$dsn = 'mysql:host=localhost;dbname=iot';
$username = 'root';
$password = '';

$dbh = new PDO($dsn, $username, $password);
//build the query
$query="SELECT temperaturevalue, humidityvalue FROM sensors";

//execute the query
$data = $dbh->query($query);
//convert result resource to array
$result = $data->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<title>Smart house</title>
<meta http-equiv="refresh" content="30">
<meta charset="UTF-8">
<style>

h1 {color:orange;
     font-style: italic;
    font-size:300%}

img {  
    width:100%; 
}
</style>
</head>
<body>

<h1><strong>Connect and control</strong></h2>
<P style="text-align:center;"><img src="myhouse.png" alt="smart house" style="width:50px;height:40px;"></p>

<?
//display array elements
foreach($result as $output) {
echo "temperature Value";
echo $output['temperaturevalue']; 
echo "<br/>";
echo "<br/>";
echo "humidity ";
echo $output['humidityvalue'] ;

}
?>
</body>
</html>