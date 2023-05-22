<?php
$username = 'root';
$password = '';
$dbname = 'exam';
global $conn;
try {
    $conn = new PDO ("mysql:host=Localhost;dbname=".$dbname, $username, $password);
    // echo 'Connection';
} catch (\Throwable $th) {
    echo 'Error Connection';
}
?>