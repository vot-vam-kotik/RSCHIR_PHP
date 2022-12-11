<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
require "database.php";

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['UserId'] ?? "";
$phone = $data['Phone'];
$address = $data['Address'];
$gender = $data['Gender'];

$sql = "update user set Phone = '$phone', Address = '$address', Gender = '$gender' where UserId = '$id'";
if (mysqli_query($db, $sql)) {
  echo json_encode(['msg' => 'Data Updated Successfully!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Failed to be Updated!', 'status' => false]);
}
?>