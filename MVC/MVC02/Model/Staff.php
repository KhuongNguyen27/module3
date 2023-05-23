<?php
namespace Staff;
use PDO;
class Staff{
    static function index(){
        global $conn;
        $sql = 'SELECT * FROM staff_list';
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        return $rows;
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
        $Name_staff = $_POST['Name_staff'];
        $Position = $_POST['Position'];
        $Branch = $_POST['Branch'];
        $Old = $_POST['Old'];
        $Day_of_start = $_POST['Day_of_start'];
        $Slary = $_POST['Slary'];
        $sql = "UPDATE `staff_list` SET `Name_staff` = '$Name_staff', `Position` = '$Position', `Branch` = '$Branch', `Old` = '$Old', `Day_of_start` = '$Day_of_start', `Slary` = '$Slary' WHERE `staff_list`.`ID` = $ID;";
        $conn->query($sql);
    }
    static function create(){
        global $conn;
        $Name_staff = $_POST['Name_staff'];
        $Position = $_POST['Position'];
        $Branch = $_POST['Branch'];
        $Old = $_POST['Old'];
        $Day_of_start = $_POST['Day_of_start'];
        $Slary = $_POST['Slary'];
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
        $search = isset($_POST['search'])?$_POST['search']: null;
        if (empty($search)) {
            $sql = "SELECT * FROM staff_list";
        }else{
            $sql = "SELECT * FROM staff_list WHERE ID LIKE '%$search%' OR Name_staff LIKE '%$search%' OR Position LIKE '%$search%' OR Branch LIKE '%$search%'  OR Old LIKE '%$search%' OR Day_of_start LIKE '%$search%' OR Slary LIKE '%$search%' ";
        }
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        return $rows;
    }
}
?>