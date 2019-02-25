<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

<?php
    session_start();
    $name=$_SESSION['username'];
    echo "<h1> Hello $name</h1>";

    include 'dbconnect.php';

    $sql = "SELECT* FROM users";

    $result=mysqli_query($db,$sql);

    while($row=$result->fetch_array())
    {
        $user =	$row['username'];
        echo	"<p>" .$user. "</p>";
    }

?>

</body>
</html>