<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Skicka mail</title>
</head>
<body>
<?php

$to = $_POST["email"];

$message = $_POST["message"];
$from = "simonhan@vgy.se";
$header = "From: $from\n";
$header .= "Reply-To: kalle@anka.se\n";
$header .= "MIME-Version: 1.0\n";
$header .= "Content-type: text/html; charset=utf-8\n";

if (mail($to, "Quiz", $message, $header)){
    echo "Mail skickat!";
} else {
    echo  "Mail misslyckades :(";
}

?>

</body>
</html>