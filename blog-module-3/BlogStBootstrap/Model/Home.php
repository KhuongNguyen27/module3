<?php
namespace Model;
use PDO;
class Home{
    static function getHome(){
        global $conn;
        $sql = "SELECT * FROM mvc.home";
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
        $sql = "SELECT * FROM mvc.home WHERE ID = '$ID'";
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
        $Controller = isset($_GET['controller'])?$_GET['controller']:'Home';
        $sql = "SELECT * FROM mvc.banner WHERE Controller = '$Controller'";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
        ];
        return $result;
    }
    static function getSearch(){
        global $conn;
        $search = isset($_REQUEST['search_query'])?$_REQUEST['search_query']:'';
        $sql = "SELECT * FROM mvc.home WHERE ID LIKE '%$search%' OR Title LIKE '%$search%' OR Teaser LIKE '%$search%' OR Content LIKE '%$search%' OR Create_date LIKE '%$search%';";
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