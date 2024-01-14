<?php

// lettura file
$database = json_decode(file_get_contents(__DIR__ . './dischi.json'));
$response = $database;

// elaborazioni file
if (isset($_GET['index']) && $_GET['index'] !== '') {
    //indice del disco cliccato
    $index = $_GET['index'];
    // disco cliccato
    $response = $database[$index];
}

// codifica file
header('Content-Type: application/json');
echo json_encode($response);
