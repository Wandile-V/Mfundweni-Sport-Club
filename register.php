<!DOCTYPE html >
<html>

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Member Registration</title>
<link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	<div class="navbar">		
		<ul class="nav navbar-nav"> 
			<li><a href="index.php"><img src="images/MSCLogo.jpg" alt="MSC Logo" class="logoImg"/></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="teams.php">Teams</a></li>
			<li><a href="gallery.html">Gallery</a></li>						
			<li><a href="contact-us.php">Contact Us</a></li>						
		</ul>
		<div class="burger">
			<div class="line1"></div>
			<div class="line2"></div>
			<div class="line3"></div>
		</div>
	</nav>
	<div class="form">
			<form class="register-form" action="server.php" method="POST">
					<h1>Member Registration</h1>
					<p>NOTE: All fields marked with * are required fields</p>	
					<label for="name">Name*</label><br>
					<input type="text" id="member-name" name="member-name" placeholder="Name">
					</br></br>

                    <label for="surname">Surname*</label><br>
                    <input type="text" id="member-surname" name="member-surname" placeholder="Surname">
                    <br><br>

                    <label for="email">Email*</label><br>
					<input type="text" id="member-email" name="member-email" placeholder="Email">
					</br></br>

                    <label for="phone">Phone*</label><br>
                    <input type="tel" id="member-phone" name="member-phone" placeholder="Phone number">
                    <br><br>
					
					<label for="password">Password*</label><br>
					<input type="password" id="member-password" name="member-password" placeholder="Password">
					</br></br>

                    <label for="password">Confirm Password*</label><br>
                    <input type="password" id="conpasssword" name="confirm-password" placeholder="Confirm Password">
                    <br><br>

					<input class="button" type="submit" name="register-submit" value="Submit">  
					<p>Already have an account? Click <a href="login.php">here</a> to login</p>
			</form>

			
	</div>
<script src="js/jscript.js"></script>
</body>

</html>
