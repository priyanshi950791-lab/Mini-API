<?php
header("Content-Type: application/json");

$items = [
    "Practice coding daily",
    "Read programming books",
    "Learn PHP basics",
    "Build small projects",
    "Never give up"
];

echo json_encode($items);
?>
