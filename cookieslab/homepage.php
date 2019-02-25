<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

session_start();
$accesslevel=$_COOKIE['access_level'];

displayAccessLevelInformation($accesslevel);

function displayAccessLevelInformation($accessLevel) {
    if ($accessLevel == "standarduser") {
        echo "<p style=\"background-color=lightgreen\">You are currently logged in as a standard user</p>";
    }
    elseif ($accessLevel == "root") {
        echo "<p style=\"background-color=red\">You are a root user</p>";
    }
}



?>

</body>
</html>
