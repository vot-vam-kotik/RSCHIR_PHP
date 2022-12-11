<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
require "database.php";

$data = json_decode(file_get_contents("php://input"), true);

$name=$data['name'] ?? "";
$phone=$data['phone'] ?? "";
$address=$data['address'] ?? "";
$department=$data['department'] ?? "";
$gender=$data['gender'] ?? "";
$email=$data['email'] ?? "";

$sql = "INSERT INTO employee (Name, Phone, Address, Department, Gender, Email)
VALUES ('$name', '$phone', '$address', '$department', '$gender', '$email')";
if (mysqli_query($db, $sql)) {
  echo json_encode(['msg' => 'Data Inserted Successfully!', 'status' => true]);
} else {
  echo json_encode(['msg' => 'Data Failed to be Inserted!', 'status' => false]);
}
?>

