<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
include 'dbconnect.php';

$sql = "SELECT* FROM marvelmovies WHERE yearReleased > 2010";

$result=mysqli_query($db,$sql);

while($row=$result->fetch_array())
{
    $movieTitle =	$row['title'];
    echo	"<p>" .$movieTitle. "</p>";
}

?>
</body>
</html>