<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET["lat"]) && isset($_GET["long"])) {
    echo "Parameters received.<br>"; // Debugging line

    $lat = htmlspecialchars($_GET["lat"]);
    $long = htmlspecialchars($_GET["long"]);

    $myfile = fopen("location.txt", "a");
    
    if ($myfile) {
        $txt = "lat: " . $lat . "\nlong: " . $long . "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
        echo "Data saved successfully.";
    } else {
        echo "Error: Unable to open the file.";
    }
} else {
    echo "Error: Latitude and Longitude not provided.";
}
?>