<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
require "database.php";

$data = json_decode(file_get_contents("php://input"), true);

$email="";
if (isset($data)) {
    $email = array_values($data)[0];
    echo ' name set by code:   ';  
}
$sql = "SELECT * FROM user WHERE Email LIKE '%$email%'";
$result = mysqli_query($db, $sql);
if ($result) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($data);
} else {
    echo json_encode(['msg' => 'Wrong query!', 'status' => false]);
}
?>

