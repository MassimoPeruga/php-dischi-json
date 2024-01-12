<?php

// lettura file
$database = json_decode(file_get_contents(__DIR__ . './dischi.json'));

// elaborazioni file


// codifica file
header('Content-Type: application/json');
echo json_encode($database);
