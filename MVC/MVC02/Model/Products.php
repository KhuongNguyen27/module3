<?php
namespace Products;
use PDO;
class Products{
    static function index(){
        global $conn;
        global $records_per_page;
        $records_per_page= 5;
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $search = isset( $_REQUEST['search'] ) ? $_REQUEST['search'] : '';

        $offset = ($current_page - 1) * $records_per_page;
        $sql = "SELECT * FROM products"; 
        $sql_count = "SELECT count(id) as total FROM products"; 
        if($search){
            $sql .= " WHERE ID LIKE '%$search%' OR Name LIKE '%$search%' ";
            $sql_count .= " WHERE ID LIKE '%$search%' OR Name LIKE '%$search%' ";
        }
        
        $stmt_count = $conn->query($sql_count);
        $stmt_count->setFetchMode(PDO::FETCH_ASSOC);
        $row_count = $stmt_count->fetch();
        $total_records = $row_count['total'];
        $total_pages = ceil($total_records / $records_per_page);

        $sql .= " LIMIT $records_per_page OFFSET $offset";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode( PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();

        $return = [
            'rows' => $rows,
            'total_records' => $total_records,
            'total_pages' => $total_pages,
        ];
        return $return;
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
        global $records_per_page;
        $search = isset($_POST['search'])?$_POST['search']: null;
        $records_per_page= 5;
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($current_page - 1) * $records_per_page;
        if (empty($search)) {
            $sql = "SELECT * FROM products LIMIT $records_per_page OFFSET $offset";
        }else{
            $sql = "SELECT * FROM products WHERE ID LIKE '%$search%' OR Name LIKE '%$search%' OR Price LIKE '%$search%' OR Description LIKE '%$search%'  OR Producter LIKE '%$search%' LIMIT $records_per_page OFFSET $offset";
        }
        $mysql = $conn->query($sql);
        $mysql->setFetchMode( PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        return $rows;
    }
}
?>