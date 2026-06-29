<?php

header("Content-Type: application/json");

$name = "Guest";

if(isset($_GET["name"]))
{
    $name = $_GET["name"];
}

echo json_encode([
    "message" => "Hello, ".$name."!"
]);

?>
