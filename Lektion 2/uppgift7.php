<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 7</title>
</head>
<body>
<?php

$count = rand(4, 10);
$list = [];
for ($i = 0; $i < $count; $i++) {
    $list[$i] = rand(-10, 10);
}

echo round(getAverage($list), 2);

function getAverage($list) {
    $tot = 0;
    for ($i = 0; $i < count($list); $i++) {
        $tot += $list[$i];
    }
    return $tot / count($list);
}

?>
</body>
</html>