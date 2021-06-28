<?php
	//A session is a way to store information (in variables) to be used across multiple pages.
	session_start();
	include('dbConn.php');

	if(isset($_GET["playerID"]))
	{
		$query = "SELECT * FROM players WHERE playerID = ".$_GET['playerID'];
		$result = mysqli_query($db_connect, $query);
		$editRow = mysqli_fetch_array($result);	//collects item row info
	}
?>

<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Player Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            <p id="player-profile">Hello World</p>    
             <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
					<li><a href="index.php"><img src="images/MSCLogo.jpg" alt="MSC Logo" class="logo"/></a></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="teams.php">Teams</a></li>
                    <li><a href="gallery.html">Gallery</a></li>						
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </div>
        
            <div class="player profile">
               
                <form method="post">
					 <center><table cellpadding="2" cellspacing="2">
						<tr>
							<td>Name</td>
							<td>
								<div class="input-group">
									<input type="text" name="name" value="<?php echo $editRow['playerName'];?>">
							  	</div>					
							</td>
						</tr>
						
						<tr>
							<td>Surname</td>
							<td>
								<div class="input-group">
									<input type="text" name="surname" value="<?php echo $editRow['surname'];?>">
							  	</div>

							</td>
						</tr>
						
						<tr>
							<td>Email</td>
							<td>
								<div class="input-group">
									<input type="text" name="email" value="<?php echo $editRow['email'];?>">
							  	</div>

							</td>
						</tr>

                        <tr>
							<td>Date Of Birth</td>
							<td>
								<div class="input-group">
									<input type="text" name="dateOfBirth" value="<?php echo $editRow['dateOfBirth'];?>">
							  	</div>

							</td>
						</tr>
						
						<tr>
							<td>Position</td>
							<td>
								<div class="input-group">
									<input type="text" name="position" value="<?php echo $editRow['position'];?>">
							  	</div>

							</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td>
				  				<button type="submit" class="btn" name="save" value="Save" style="width:70px;">Save</button>
				  				<button type="submit" class="btn" name="cancel" value="Cancel">Cancel</button>				  				
							</td>
						</tr>
					</table></center>
				</form>
				Click <a href="player-reg.php">here</a> to register a new player.
            </div>
        </div>
    </body>
</html>