!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
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
                
                <label for="email">Member ID:</label>
                <input type="text" id="member-id" name="member-id" placeholder="Member-Id">
                </br></br>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="password">
                </br></br>
                <input class="button" type="submit" name="user-login-submit" value="Submit"> 
                <p>Do not have an account? Click here to <a href="register.php">register</a></p>
            </form>

        
	</div>

</body>

</html>
