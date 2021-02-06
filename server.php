<?php
//************************** Register Member **********************//
if(isset($_POST['register-submit']))
{
    $name = mysqli_real_escape_string($db_connect, $_POST['name']);
    $surname = mysqli_real_escape_string($db_connect, $_POST['surname']);
    $email = mysqli_real_escape_string($db_connect, $_POST['email']);
    $phone = mysqli_real_escape_string($db_connect, $_POST['phone']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);
    //******************insert form values */
    $registerQuery = "INSERT INTO members (memberName, memberSurname, memberEmail, memberPhone, memberPassword) VALUES ('$name, $surname, $phone, $password')";
    mysqli_query($db_connect, $registerQuery);

    header('location: login.php');
}

//*********************** Player registration ************************//
if(isseet($_POST['player-reg-submit']))
{
    $name = mysqli_real_escape_string($db_connect, $_POST['player-name']);
    $surname = mysqli_real_escape($db_connect, $_POST['player-surname']);
    $position = mysqli_real_escape($db_connect, $_POST['player-position']);
    $phone = mysqli_real_escape($db_connect, $_POST['player-phone'])
}

//************************** Member login ***********************//
if(isset($_POST['login-submit'])
{
    //Read all values inserted in the login form
    $memberEmail = mysqli_real_escape($db_connect, $_POST['member-email']);
    $memberPassword = mysqli_real_escape($db_connect, $_POST['password']);

    //Read from the database
    $loginQuery = "SELECT * FROM members WHERE 'memberEmail = $memberEmail' AND 'memberPasseord = $memberPassword'";
    $results = mysqli_query($db_connect, $loginQuery);

    if(mysqli_num_rows($results) == 1)
    {
        echo '<script>alert("Login Succesful! :)")</script>';

        //redirects 
        header('location: profile.php');
    }
    else
    {
        header('location: login.php');
            echo '<script>alert("Incorrect email/password")</script>'; //Error message if credentials are incorrect
    }
}
?>