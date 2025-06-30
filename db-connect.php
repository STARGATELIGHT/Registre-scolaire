<?php 
// Hostname
$host = "student-db.c7guqcykm4ba.eu-north-1.rds.amazonaws.com";
// Username
$uname = "admin";
// Password
$pw = "footballcupsworld";
// Database Name
$dbname = "simple_attendance_db";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>