<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$provisionedActivities = array("specs", "mugs", "sausage rolls");

for($i = 1; $i < 31; $i++) {
    switch ($i) {
        case ($i%2 == 0):
            if ($i%3 == 0 && $i%4 ==0) {
                echo "<p>$i $provisionedActivities[0] & $provisionedActivities[1] & $provisionedActivities[2]</p>";
            }
            elseif ($i%3 == 0) {
                echo "<p>$i $provisionedActivities[0] & $provisionedActivities[1]</p>";
            }
            elseif ($i%4 == 0) {
                echo "<p>$i $provisionedActivities[0] & $provisionedActivities[2]</p>";
            }
            else {
                echo "<p>$i $provisionedActivities[0]</p>";
            }
            break;
        case ($i%3 == 0):
            echo "<p>$i $provisionedActivities[1]</p>";
            break;
        case ($i%4 == 0):
            echo "<p>$i $provisionedActivities[2]</p>";
            break;
        default:
            echo "<p>$i nothing</p>";
    }
}
?>
</body>

</html>