<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 8</title>
</head>
<body>
<?php

$count = rand(4, 10);
$list = [];
for ($i = 0; $i < $count; $i++) {
    $list[$i] = rand(0, 50);
}

$average;
$median;
getAverageAndMedian($list, $average, $median);

echo "Average: ". round($average, 2).  "<br>";
echo "Median: $median";

function getAverageAndMedian($list, &$average, &$median) {
    $tot = 0;
    $count = count($list);
    for ($i = 0; $i < $count; $i++) {
        $tot += $list[$i];
        echo "$list[$i] <br>";
    }

    $average = $tot / $count;
    sort($list);

    if ($count % 2 == 0) {
        $median = round(($list[$count / 2] + $list[($count / 2) - 1]) / 2, 2);
    } else {
        $median =  $list[($count / 2) - 0.5];
    }
}

?>
</body>
</html>