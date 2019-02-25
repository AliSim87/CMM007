<?php
/**
 * Created by PhpStorm.
 * User: 0706693
 * Date: 25/02/2019
 * Time: 11:25
 */

include ("dbconnect.php");

if(empty($_POST["username"]) || empty($_POST["password"])) {
    echo "Both fields are required";
}
else {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql = "SELECT uid FROM users WHERE username='$username' AND password='$password'";

    $result=mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 1)
    {
        header("location: home.php"); // Redirecting To another Page
        session_start();
        $_SESSION['username'] = $username;
    }else
    {
        echo "Incorrect username or password.";
    }
}