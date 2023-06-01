<?php
namespace Staff;
use PDO;
use Exception;
class Staff{
    static function index(){
        global $conn;
        global $record_per_page;
        $record_per_page = 5;
        $current_page = isset($_GET['page'])?$_GET['page']:1;
        $offset = ($current_page - 1) * $record_per_page;
        $sql = "SELECT * FROM staff_list";
        $sql_count = "SELECT COUNT(ID) as total FROM staff_list";
        $stmt_count = $conn->query($sql_count);
        $stmt_count->setFetchMode(PDO::FETCH_ASSOC);
        $row_count = $stmt_count->fetch();
        $total_records = $row_count['total'];
        $total_pages = ceil($total_records / $record_per_page);
        $sql .=" LIMIT $record_per_page OFFSET $offset";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
            'total_pages' => $total_pages,
        ];
        return $result;
    }
    static function getView(){
        global $conn;
        $ID = $_GET['ID'];
        $sql = "SELECT * FROM staff_list WHERE ID = $ID";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $row = $rows[0];
        return $row;
    }
    static function edit(){
        global $conn;
        $ID = $_GET['ID'];
        global $conn;
            $Name_staff = $_POST['Name_staff'];
            if (empty($Name_staff)) {
                throw new Exception("Name_staff not found, Please try again");
                die();
            }
            $Position = $_POST['Position'];
            $Branch = $_POST['Branch'];
            $Old = $_POST['Old'];
            if (empty($Old)) {
                throw new Exception("Old not found");
                die();
            }
            $Day_of_start = $_POST['Day_of_start'];
            if (empty($Day_of_start)) {
                throw new Exception("Day_of_start not found");
                die();
            }
            $Slary = $_POST['Slary'];
            if (empty($Slary)) {
                throw new Exception("Slary not found");
                die();
            }
        $sql = "UPDATE `staff_list` SET `Name_staff` = '$Name_staff', `Position` = '$Position', `Branch` = '$Branch', `Old` = '$Old', `Day_of_start` = '$Day_of_start', `Slary` = '$Slary' WHERE `staff_list`.`ID` = $ID;";
        $conn->query($sql);
    }
    static function create(){
        global $conn;
            $Name_staff = $_POST['Name_staff'];
            if (empty($Name_staff)) {
                throw new Exception("Name_staff not found, Please try again");
                die();
            }
            $Position = $_POST['Position'];
            $Branch = $_POST['Branch'];
            $Old = $_POST['Old'];
            if (empty($Old)) {
                throw new Exception("Old not found");
                die();
            }
            $Day_of_start = $_POST['Day_of_start'];
            if (empty($Day_of_start)) {
                throw new Exception("Day_of_start not found");
                die();
            }
            $Slary = $_POST['Slary'];
            if (empty($Slary)) {
                throw new Exception("Slary not found");
                die();
            }
            $sql = "INSERT INTO `staff_list` (`ID`, `Name_staff`, `Position`, `Branch`, `Old`, `Day_of_start`, `Slary`) VALUES (NULL, '$Name_staff', '$Position', '$Branch', '$Old', '$Day_of_start', '$Slary');";
            $conn->query($sql);
    }
    static function delete(){
        global $conn;
        $ID = $_GET['ID'];
        $sql = "DELETE FROM staff_list WHERE ID = $ID";
        $conn->query($sql);
    }
    static function search(){
        global $conn;
        global $record_per_page;
        $record_per_page = 5;
        $current_page = isset($_GET['page'])?$_GET['page']:1;
        $search = isset($_REQUEST['search'])?$_REQUEST['search']:'';
        $offset = ($current_page - 1)* $record_per_page;
        $sql = "SELECT * FROM staff_list WHERE ID LIKE '%$search%' OR Name_staff LIKE '%$search%' OR Position LIKE '%$search%' OR Branch LIKE '%$search%' OR Old LIKE '%$search%' OR Day_of_start LIKE '%$search%' OR Slary LIKE '%$search%'";
        $sql_count = "SELECT COUNT(ID) as total FROM staff_list WHERE ID LIKE '%$search%' OR Name_staff LIKE '%$search%' OR Position LIKE '%$search%' OR Branch LIKE '%$search%' OR Old LIKE '%$search%' OR Day_of_start LIKE '%$search%' OR Slary LIKE '%$search%'";
        $stmt_count  = $conn->query($sql_count);
        $stmt_count->setFetchMode(PDO::FETCH_ASSOC);
        $row_count = $stmt_count->fetch();
        $total_records = $row_count['total'];
        $total_pages = ceil($total_records / $record_per_page);
        $sql .= "LIMIT $record_per_page OFFSET $offset";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        
        $result = [
            'rows' => $rows,
            'total_pages' => $total_pages,
        ];
        return $result;
    }
}
?>