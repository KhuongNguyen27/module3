<?php
    $username = "root";
    $password = "";
    $dbname = "user";
    global $conn;
    try {
        $conn = new PDO("mysql:host=localhost;dbname=".$dbname,$username,$password);
        // echo 'connected';
    } catch (Exception $e) {
        echo 'error';
    }
?>