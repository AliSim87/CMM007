<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
include 'dbconnect.php';

$sql = "SELECT* FROM marvelmovies WHERE productionStudio LIKE '%Marvel%'";

$result=mysqli_query($db,$sql);

while($row=$result->fetch_array())
{
    $movieTitle =	$row['title'];
    echo	"<p>" .$movieTitle. "</p>";
}

?>
</body>
</html>