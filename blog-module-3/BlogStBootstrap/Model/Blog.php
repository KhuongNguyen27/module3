<?php
namespace Model;
use PDO;
class Blog{
    static function getHome(){
        global $conn;
        $sql = "SELECT * FROM mvc.blogphp";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
        ];
        return $result;
    }
    static function getJS(){
        global $conn;
        $sql = "SELECT * FROM mvc.blogjs";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $result = [
            'rows' => $rows,
        ];
        return $result;
    }
    static function getSQL(){
        global $conn;
        $sql = "SELECT * FROM mvc.blogsql";
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
        $table = isset($_REQUEST['table'])?$_REQUEST['table']:'blogphp';
        $sql = "SELECT * FROM mvc.$table WHERE ID = '$ID'";
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
        $table = isset($_REQUEST['table'])?$_REQUEST['table']:'blogphp';
        $search = isset($_REQUEST['search_query'])?$_REQUEST['search_query']:'';
        $sql = "SELECT * FROM mvc.$table WHERE ID LIKE '%$search%' OR Title LIKE '%$search%' OR Teaser LIKE '%$search%' OR Content LIKE '%$search%' OR Create_date LIKE '%$search%';";
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