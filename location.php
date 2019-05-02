<?php
	session_start();
	// include("connect.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["search"]))
		{
			$error = "Fields is empty.";
		}else
		{
			// Define $username and $password
			$search=$_POST['search'];

			// To protect from MySQL injection
			$search = stripslashes($search);
			$search = mysqli_real_escape_string($db, $search);
			//$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT * FROM Users WHERE FName='$search'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{                                                               
                                 $latitude = $row['XValue'];
								 $_SESSION['latitude'] = $latitude;
								 $longitude = $row['YValue'];
								 $_SESSION['longitude'] = $longitude;
                                                                   
			}else{
				$error = "Incorrect username or password.";
			}

		}
	}

?>
HH9x4CiBDApWNRz