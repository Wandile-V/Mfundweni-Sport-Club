<?php
include('dbConn.php');

//************************** Register Member **********************//
if(isset($_POST['register-submit']))
{
    $name = mysqli_real_escape_string($db_connect, $_POST['member-name']);
    $surname = mysqli_real_escape_string($db_connect, $_POST['member-surname']);
    $email = mysqli_real_escape_string($db_connect, $_POST['member-email']);
    $phone = mysqli_real_escape_string($db_connect, $_POST['member-phone']);
    $password = mysqli_real_escape_string($db_connect, $_POST['member-password']);
    $cpassword = mysqli_real_escape_string($db_connect, $_POST['confirm-password']);
    // $encryptPassword = md5($password); //encrypts password
    
    if($cpassword == $password)//check if the password and confirm passsword match
    {
        $registerQuery = "INSERT INTO members (memberName, memberSurname, memberEmail, memberPhone, memberPassword) VALUES ('$name', '$surname', '$email', '$phone', '$password')";
        mysqli_query($db_connect, $registerQuery);
    
        echo "<script>
            alert('Registration Successful!');
            window.location.href='login.php';  
        </script>";
    }
    else
    {
        echo "<script>
            alert('Passwords do not match, try again!');
            window.location.href='login.php';  
        </script>";
    }
}

//*********************** Player registration ************************//
if(isset($_POST['player-reg-submit']))
{
    $name = mysqli_real_escape_string($db_connect, $_POST['player-fname']);
    $surname = mysqli_real_escape_string($db_connect, $_POST['player-surname']);
    $position = mysqli_real_escape_string($db_connect, $_POST['player-position']);
    $phone = mysqli_real_escape_string($db_connect, $_POST['player-phone']);

    //*******************inserts form values */
    $registerQuery = "INSERT INTO players (playerName, playerSurname, playerPosition, playerPhone) VALUES ('$name', '$surname', '$position', '$phone')";

    header('location: player-profile.php');
}

//************************** Member login ***********************//
if(isset($_POST['LoginButton']))
{
    //Read all values inserted in the login form
    $memberEmail = mysqli_real_escape_string($db_connect, $_POST['member-email']);
    $memberPassword = mysqli_real_escape_string($db_connect, $_POST['member-password']);
    // $encryptPassword = md5($memberPassword);

    //Read from the database
    $loginQuery = "SELECT * FROM members WHERE memberEmail = '$memberEmail' AND memberPassword = '$memberPassword'";
    $results = mysqli_query($db_connect, $loginQuery);

    if(mysqli_num_rows($results) == 1)
    {
        echo "<script>
            alert('Login Successful!');
            window.location.href='profile.php';  
       </script>";
    }
    else
    {
        echo "<script>
            alert('Incorrect email/password!');
            window.location.href='login.php'; 
        </script>";
    }
}
?>