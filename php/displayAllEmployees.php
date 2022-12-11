<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
require "database.php";

$sql = "SELECT * FROM employee";
$result = mysqli_query($db, $sql);
if ($result) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if ($data!=NULL){
        echo json_encode($data);
    }
    else {
        echo json_encode(['msg' => 'no such name!', 'status' => false]);
    }
}