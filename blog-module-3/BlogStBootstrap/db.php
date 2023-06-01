<?php 
$username = 'root';
$password = '';
$dbname = 'mvc';
global $conn;
try {
    $conn = new PDO("mysql:localhost;dbname=".$dbname,$username,$password);
    // echo "Connection";
} catch (Exception $e) {
    echo 'Error';
}
?>