<?php
$todoname = $_POST["todoname"];
$todoname = trim($todoname);

if (file_exists("jobs.json")) {
    $todojson = file_get_contents("jobs.json");
    $todojsonArray = json_decode($todojson, true);
} else {
    $todojsonArray = [];
}

$todojsonArray[$todoname] = ["completed" => false];

file_put_contents("jobs.json", json_encode($todojsonArray, JSON_PRETTY_PRINT));

header("Location: index.php");
