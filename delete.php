<?php
var_dump($_POST);
$todojson = file_get_contents("jobs.json");
$todojsonArray = json_decode($todojson, true);

$todoName = $_POST['todo_name'];

unset($todojsonArray[$todoName]);

file_put_contents("jobs.json", json_encode($todojsonArray, JSON_PRETTY_PRINT));
header("Location: index.php");
