<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "Ali" && $password == "1234") {
    echo "Username and Password Correct";
    session_start();
    $_SESSION['access_level'] = "standarduser";
}
else {
    echo "Wrong";
}

?>

</body>
</html>