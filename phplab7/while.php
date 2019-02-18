<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$provisionedActivities = array("specs", "mugs", "sausage rolls");
$specs = 7;
$mugs = 7;
$sausage = 7;
$todaysdate = 0;

while ($specs > 0 && $mugs > 0 && $sausage > 0) {
    $todaysGood = rand(0,2);
    $todaysdate += 1;
    if ($todaysGood == 0) {
        echo "On the $todaysdate of the month $provisionedActivities[0] is available<br />";
        $specs = $specs - 1;
    }
    elseif ($todaysGood == 1) {
        echo "On the $todaysdate of the month $provisionedActivities[1] is available<br />";
        $mugs = $mugs - 1;
    }
    else {
        echo "On the $todaysdate of the month $provisionedActivities[2] is available<br />";
        $sausage = $sausage - 1;
    }
}

echo "<b>No more good are available this month.</b>";

?>
</body>

</html>