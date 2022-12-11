<?php
ini_set('display_startup_errors',1); 
ini_set('display_errors',1);
error_reporting(-1);
//todo: put db in config


//connection
$db = new mysqli("localhost","root","","db");

// Check connection
if ($db -> connect_errno) {
    echo "Failed to connect to MySQL: " . $db -> connect_error;
    exit();
}
else {echo "Connected to database";}
