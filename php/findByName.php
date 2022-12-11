<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
require "database.php";

$data = json_decode(file_get_contents("php://input"), true);
//$searchterm = ['Name'];
//$searchterm = $_POST['Name'] ?? "";
$name="";
if (isset($data)) {
    $name = array_values($data)[0];
}
$sql = "SELECT * FROM employee WHERE Name LIKE '%$name%'";
$result = mysqli_query($db, $sql);
if ($result) {
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if ($data!=NULL){
        echo json_encode($data);
    }
    else {
        echo json_encode(['msg' => 'no such name!', 'status' => false]);
    }
} else {
    echo json_encode(['msg' => 'Wrong query!', 'status' => false]);
}
?>

