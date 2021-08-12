<?php
//connects to the database
$db_host = "us-cdbr-east-04.cleardb.com";
$db_username = "b42deaba54b945";
$db_password = "";
$db_name = "";

$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    //check connection
    if(mysqli_connect_error())
    {
        echo "<h3>Failed to connect to mySQL: </h3>".mysqli_connect_error();
    }
    else
    {
        echo "<h3>Connected!</h3>"; //When connection is succesfull 
    }

?>