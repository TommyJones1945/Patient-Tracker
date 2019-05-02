<?php
include('connect.php');

$conn = $db;

$user_name = $conn->real_escape_string($_POST['username']);
$new_user     =  str_replace(' ', '', $user_name); 
 
$query = "DELETE FROM Users WHERE Username = $new_user";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
 
?>
<script>
alert('Oh well! Can't help them all!');
window.location.href = 'homepage_2_.html';
</script>
<?php 
$conn->close(); 
?>