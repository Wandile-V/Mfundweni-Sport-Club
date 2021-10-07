<!DOCTYPE html >
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
	</head>

<body>
<nav>
	<div class="logo">
		<a href="index.php"><img src="images/MSCLogo.jpg" alt="MSC Logo" class="logoImg"/></a>	
	</div>
	<ul class="navbar"> 	
		<li><a href="index.php">Home</a></li>
		<li><a href="about-us.php">About Us</a></li>
		<li><a href="teams.php">Teams</a></li>
		<li><a href="gallery.html">Gallery</a></li>						
		<li><a href="contact-us.php">Contact Us</a></li>	
		<li><a href="login.php"><button class="navLoginButton">Login</button></a></li>
	</ul>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>
</nav>
	<div class="form">
        <form class="contact-form" action="server.php" method="POST">
			<h1>Login</h1>
            <label for="email">Email:</label>
            <input type="text" id="email" name="member-email" placeholder="Email">

            </br></br>

            <label for="password">Password</label>
            <input type="password" id="password" name="member-password" placeholder="Password">

            </br></br>
            <input class="button" type="submit" name="LoginButton" value="Login">

            <p>Do not have an account? Click here to <a href="register.php">register</a></p>
        </form>
	</div>
</body>

</html>
