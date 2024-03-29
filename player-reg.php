<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Player Registration</title>
<link href="css/style.css" type="text/css"  rel="stylesheet"/>
</head>

<body>
<nav>
	<div class="logo">
		<a href="index.php"><img src="images/MSCLogo.jpg" alt="MSC Logo" class="logoImg"/></a>
		<p>Mfundweni Sporting Club</p>	
	</div>
	<div class="menu">
		<ul class="navbar"> 	
			<li><a href="index.php">Home</a></li>
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="gallery.html">Gallery</a></li>						
			<li><a href="contact-us.php">Contact Us</a></li>	
			<li><a href="login.php"><button class="navLoginButton">Login</button></a></li>
		</ul>
	</div>
	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>
</nav>
	<div class="container">
		 <h1>Player registration</h1> <!-- Player registration section -->
		 <form class="form" action="server.php" method="POST">
					<label for="name">Name</label>
					<input type="text" id="playername" name="player-fname" placeholder="Name">
					</br></br>

                    <label for="surname">Surname</label>
                    <input type="text" id="surname" name="player-surname" placeholder="Surname">
                    <br><br>

                    <label for="position">Position</label>
					<input type="text" id="position" name="player-position" placeholder="Position">
					</br></br>

                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="player-phone" placeholder="Phone number">
                    <br><br>

					<input class="button" type="submit" name="player-reg-submit" value="Submit">
		</form> 
        
	</div>
	<script src="js/script.js"></script>
</body>
</html>
