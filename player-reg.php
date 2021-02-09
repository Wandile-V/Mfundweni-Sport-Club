<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Player Registration</title>
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

</body>

</html>
