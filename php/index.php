<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require 'database.php';

function msg($success,$status,$message,$extra = []){
    return array_merge([
        'success' => $success,
        'status' => $status,
        'message' => $message
    ],$extra);
}

if (isset($_GET['Email']) && isset($_GET['Email']) != '' && isset($_GET['Password']) && isset($_GET['Password']) != '') {

    $email = $_GET['Email'];
    $password = $_GET['Password'];

    $getdata = "SELECT 'Email', 'Password' FROM  user  WHERE 'Email' = '".$email."' AND 'Password' = '".$password."'";
    $result = mysqli_query($db, $getdata);
    $row = mysqli_fetch_assoc($data);
    
    if ($result -> num_rows > 0) {
        $resp["status"] = "1";
        $resp["message"] = "Logged in!";
    }
    else {
        $resp["status"] = "0";
        $resp["message"] = "wrong password"; 
    }
} else {
    $resp["status"] = "0";
    $resp["message"] = "wrong data"; 
}

header('content-type: application/json');
$response["response"]=$resp;
echo json_encode($response);


///$fetch_user_by_email = "SELECT Email, Password FROM  user  WHERE Email ='{$email}'";
//$returnData = msg(0,422,'Your password must be at least 8 characters long!');
            