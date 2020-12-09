<!DOCTYPE html >
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		<link  rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>

<body>
	<img src="images/MSCLogo.jpg" alt="MSC Logo" class="logo"/>
	<div id="navbar">		
		<ul class="nav navbar-nav"> 
			<li><a href="index.php">Home</a></li>
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="gallery.php">Gallery</a></li>						
			<li><a href="contact-us.php">Contact Us</a></li>						
		</ul>
	</div>
	<div id="container">
		<h1>Login</h1>
			<form id="contact-form" action="server.php" method="POST">
					
					<label for="email">Email</label>
					<input type="text" id="email" name="member-email" placeholder="Email">
					</br></br>
					
					<label for="password">Password</label>
					<input type="password" id="password" name="password" placeholder="password">
					</br></br>
					<input class="button" type="submit" name="login-submit" value="Submit"> 
					<p>Do not have an account? Click here to <a href="register.php">register</a></p>
				</form>

			
	</div>

</body>

</html>
