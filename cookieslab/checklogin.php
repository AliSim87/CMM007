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
    setcookie('access_level', 'standarduser');
}
else {
    echo "Wrong";
}

?>

</body>
</html>