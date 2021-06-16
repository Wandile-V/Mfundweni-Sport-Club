<!DOCTYPE html >
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
	</head>

<body>
	<div id="navbar">		
		<ul class="nav navbar-nav"> 
			<img class="logo" src="images/MSCLogo.jpg" alt="MSC logo"/>
			<li><a href="index.php">Home</a></li>
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="gallery.html">Gallery</a></li>						
			<li><a href="contact-us.php">Contact Us</a></li>						
		</ul>
	</div>
		<div class="form">
			<h1>Login</h1>
				<form class="form" action="server.php" method="POST">
						
						<label for="email">Email</label><br>
						<input type="text" id="email" name="member-email" placeholder="Email">
						</br></br>
						
						<label for="password">Password</label><br>
						<input type="password" id="password" name="password" placeholder="password">
						</br></br>
						<input class="button" type="submit" name="login-submit" value="Login"> 
						<p>Do not have an account? Click <a href="register.php">here</a> to register</p>
				</form>			
	</div>
</body>

</html>
