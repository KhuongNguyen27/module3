<?php
namespace Products;
use PDO;
class Products{
    static function index(){
        global $conn;
        $sql = "SELECT * FROM products";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        return $rows;
    }
    static function getView(){
        global $conn;
        $ID = $_GET['ID'];
        $sql = "SELECT * FROM products WHERE ID = $ID";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $row = $rows[0];
        return $row;
    }
    static function delete(){
        global $conn;
        $ID = $_GET['ID'];
        $sql = "DELETE FROM products WHERE ID = $ID";
        $conn->query($sql);
    }
    static function edit(){
        global $conn;
        $ID = $_GET['ID'];
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Description = $_POST['Description'];
        $Producter = $_POST['Producter'];
        $sql = "UPDATE `products` SET `Name` = '$Name', `Price` = '$Price', `Description` = '$Description', `Producter` = '$Producter' WHERE `ID` = $ID;";
        $conn->query($sql);
    }
    static function create(){
        global $conn;
        $Name = $_POST['Name'];
        $Price = $_POST['Price'];
        $Description = $_POST['Description'];
        $Producter = $_POST['Producter'];
        $sql = "INSERT INTO `products` (`ID`, `Name`, `Price`, `Description`, `Producter`) VALUES (NULL, '$Name', '$Price', '$Description', '$Producter');";
        $conn->query($sql);
    }
    static function search(){
        global $conn;
        $search = isset($_POST['search'])?$_POST['search']: null;
        if (empty($search)) {
            $sql = "SELECT * FROM products";
        }else{
            $sql = "SELECT * FROM products WHERE ID LIKE '%$search%' OR Name LIKE '%$search%' OR Price LIKE '%$search%' OR Description LIKE '%$search%'  OR Producter LIKE '%$search%' ";
        }
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        return $rows;
    }
}
?>