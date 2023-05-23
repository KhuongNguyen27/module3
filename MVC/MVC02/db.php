<?php
$username = 'root';
$password = '';
$dbname = 'mvc';
global $conn;
try {
    $conn = new PDO('mysql:host=localhost;dbname='.$dbname,$username,$password);
    // echo 'Conneted';
} catch (Exception $e) {
    echo 'Error connection';
}
?>