<?php


$todojson = file_get_contents("jobs.json");
$todojsonArray = json_decode($todojson, true);
$todoName = $_GET["check_job"];
$todoName = trim($todoName);

$todojsonArray[$todoName]["completed"] = !$todojsonArray[$todoName]["completed"];
file_put_contents("jobs.json", json_encode($todojsonArray, JSON_PRETTY_PRINT));
header("Location: index.php");
