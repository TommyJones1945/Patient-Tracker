<html>
<head>
<title>Registration</title>
</head>
<div class="container2">
  <form action="addAccount.php" method="post"> <!--This is the form handler that should perform an operation on the information received to load it into the database.-->
    <ul class="information">
		<li>
			<label for="first-name">First Name</label>
			<input type="text" name="firstname" id="firstname" placeholder="Enter your first name here" required />
		</li>
		<li>
			<label for="last-name">Last Name</label>
			<input type="text" name="lastname" id="lastname" placeholder="Enter your last name here" required />
		</li>		
		<li>
			<label for="email">Email</label>
			<input type="email" name="email" id="email" placeholder="Enter your email here" required />
		</li>
		<li>
			<label for="email">Address</label>
			<input type="address" name="address" id="address" placeholder="Enter your address here" required />
		</li>
		<li>
			<label for="username">Username</label>
			<input type="text" name="username" id="username" placeholder="Enter your username here" required />
		</li>
		<li>
			<label for="email">Password</label>
			<input type="password" name="password" id="password" placeholder="Enter your password here" required />
		</li>
		<li>
		<a href="homepage_2_.html" class="linkButton">HomePage</a>
		<button type="submit" class="linkButton">Submit</button>
		</li>
    </ul>
  </form>
</div>
<div class="container1">    
  <footer id="dropzone">
        <p>&copy; 2018 WECCC.com</p>
      </footer>
</div>
</html>