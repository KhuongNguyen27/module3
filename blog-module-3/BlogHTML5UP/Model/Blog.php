<?php
namespace Model;
use PDO;
class Blog{
    static function getHome(){
        global $conn;
        $sql = "SELECT * FROM blog";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
        ];
        return $result;
    }
    static function getBlog(){
        global $conn;
        $ID = isset($_GET['ID'])?$_GET['ID']:'';
        $sql = "SELECT * FROM blog WHERE `ID` = $ID";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
        ];
        return $result;
    }
    static function getPost(){
        global $conn;
        $sql = "SELECT * FROM blog";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
        ];
        return $result;
    }
    static function getBanner(){
        global $conn;
        $controller = isset($_GET['controller'])?$_GET['controller']:'local';
        $sql = "SELECT * FROM banner WHERE `Controller` = '$controller'";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
        ];
        return $result;
    }
}
?>