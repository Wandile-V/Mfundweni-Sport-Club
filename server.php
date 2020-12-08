<?php
//************************** Register Member */
if(isset($_POST['register-submit']))
{
    $name = mysqli_real_escape_string($db_connect, $_POST['name']);
    $surname = mysqli_real_escape_string($db_connect, $_POST['surname']);
    $email = mysqli_real_escape_string($db_connect, $_POST['email']);
    $phone = mysqli_real_escape_string($db_connect, $_POST['phone']);
    $password = mysqli_real_escape_string($db_connect, $_POST['password']);
    //******************insert form values */
    $registerQuery = "INSERT INTO members (memberName, memberSurname, memberEmail, memberPhone, memberEmail, memberPassword) VALUES ('$name, $surname, $phone, $password')";
    mysqli_query($db_connect, $registerQuery);

    header('location: login.php');
}
?>