<?php
	session_start();
	include("connect.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["username"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];

			// To protect from MySQL injection
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($db, $username);
			$password = mysqli_real_escape_string($db, $password);
			//$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT UserID FROM Users WHERE Username='$username' and Password='$password'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['username'] = $username; // Initializing Session
				//header("location: memberhome.php"); // Redirecting To Other Page
				$sql = "SELECT Users.Admin FROM Users";
                    $result = mysqli_query($conn, $sql); 
                    $user = mysqli_fetch_array($result, MySQLI_NUM);
                    $_SESSION['Username'] = $user['Username']; 
                    $_SESSION['Admin'] = $user['Admin'];   

                    if($_SESSION['Admin'] == 1){
                      echo "Admin!";
                      header('Location: http://sladeb.myweb.cs.uwindsor.ca/60499/homepage_2_.html');
                    }
                    if ($_SESSION['Admin'] == 2) 
                    {
                      header('Location: http://sladeb.myweb.cs.uwindsor.ca/60499/homepage.html');
                    }
			}else
			{
				$error = "Incorrect username or password.";
			}

		}
	}

?>