<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$lotteryenterants = array("Ali", "Ruth", "Fisher", "Bob", "Dawn", "Kim", "Scott", "Pam", "Gordon", "Fraser", "Katy");
$randomnumber = rand(0,10);

sort($lotteryenterants);
 $i=0;

print join(", ",$lotteryenterants);
$winner = $lotteryenterants[$randomnumber];
$winnercaps = strtoupper($winner);

echo "<p>The winner of the specs is $winnercaps</p>";

unset($lotteryenterants[array_search($winner,$lotteryenterants)]);
$randomnumber = rand(0,9);

sort($lotteryenterants);
print join(", ",$lotteryenterants);
$winner = $lotteryenterants[$randomnumber];
$winnercaps = strtoupper($winner);

echo "<p>The winner of the mugs is $winnercaps</p>";

unset($lotteryenterants[array_search($winner,$lotteryenterants)]);
$randomnumber = rand(0,8);

sort($lotteryenterants);
print join(", ",$lotteryenterants);
$winner = $lotteryenterants[$randomnumber];
$winnercaps = strtoupper($winner);

echo "<p>The winner of the sausage roll is $winnercaps</p>";

unset($lotteryenterants[array_search($winner,$lotteryenterants)]);

print join(", ",$lotteryenterants);

?>
</body>
</html>