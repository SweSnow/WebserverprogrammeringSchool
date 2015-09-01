<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Uppgift 6</title>
</head>
<body>
<?php

$count = rand(4, 10);
$list = [];
for ($i = 0; $i < $count; $i++) {
    $list[$i] = rand(-10, 10);
    echo "$list[$i] <br>";
}
echo "<br>";

removeEven($list);

for ($i = 0; $i < $count; $i++) {
    echo "$list[$i] <br>";
}

function removeEven(&$list) {
    for ($i = 0; $i < count($list); $i++) {
        if ($list[$i] % 2 == 0) {
            $list[$i] = 0;
        }
    }
}

?>
</body>
</html>