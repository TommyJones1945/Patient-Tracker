<?php
include('connect.php');

$conn = $db;

$first_name   = $conn->real_escape_string($_POST['firstname']);
$last_name    = $conn->real_escape_string($_POST['lastname']);
$user_name    = $conn->real_escape_string($_POST['username']);
$new_user     =  str_replace(' ', '', $user_name);
$user_email   = $conn->real_escape_string($_POST['email']);
$address      = $conn->real_escape_string($_POST['address']);
$user_pass    = $conn->real_escape_string($_POST['password']);
$defaultimg   = "img/PlaceHolder.jpeg";

$query   = "INSERT into projectu_users (UserID,FName,LName,Email,Address,Username,Password,Admin) VALUES(DEFAULT,'" . $first_name . "','" . $last_name . "','" . $user_email . "','" . $address . "','" . $new_user . "','" . $user_pass . "', 2)";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
?>
<script>
alert('Take care of our new patient! :)');
window.location.href = 'homepage_2_.html';
</script>
<?php 
$conn->close(); 
?>