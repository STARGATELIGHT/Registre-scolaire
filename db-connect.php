<?php 
// Hostname
$host = "replace with your actual end-point";
// Username
$uname = "your-admin-name";
// Password
$pw = "your-passwd";
// Database Name
$dbname = "your-db-name";

try{
    $conn = new MySQLi($host, $uname, $pw, $dbname);
}catch(Exception $e){
    echo "Database Connection Failed: <br>";
    print_r($e->getMessage());
    exit;
}
?>