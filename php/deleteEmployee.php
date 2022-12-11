<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
require "database.php";


// sql to delete a record
$data = json_decode(file_get_contents("php://input"), true);
//$searchterm = ['Name'];
//$searchterm = $_POST['Name'] ?? "";

if (isset($id)) {
    $id = array_values($data)[0];
}
else {
  $id="";
}
$sql = "DELETE FROM employee WHERE EmployeeId='$id'";
mysqli_query($db, $sql);
if ($db->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $db->error;
}

?>