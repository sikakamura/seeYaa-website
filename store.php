<?php 

$myfile = fopen("location.txt", "w");
$txt = "lat: " . $_GET["lat"] . "long:" . "\nlong" . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);
?>