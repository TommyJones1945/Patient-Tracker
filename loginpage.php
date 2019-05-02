<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: memberhome.php');
	}	
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>
<div class="wrapper">
	<h1><a> Login Form</a></h1>
		<form method="post" action="">
			<a colspan="2" align="center" class="error"><?php echo $error;?></a>
				<ul class ="information" align="center">
					<li style="font-weight: bold"><label for="username">Username</label>
					<input name="username" type="text" class="input" size="25" placeholder="Enter your username here" required /></li>
					<li style="font-weight: bold"><label for="password">Password</label>
					<input name="password" type="password" class="input" size="25" placeholder="Enter your password here" required /></li>
                                        <li style="font-weight: bold"><label for="usertype">User Type</label>
			                <br><input type="radio" name="user" value="1">Admin<br>   
                                        <input type="radio" name="user" value="2">User<br>
	                        </ul>
					<input type="submit" class="linkButton" name="submit" value="Login" />	
					<a href="homepage.html" class="linkButton">HomePage</a>
		</form>
</div> 
<div class="container1">
<footer id="dropzone">
	<p>&copy; 2018 WECCC.com</p>
</footer>
</div>
</html>


