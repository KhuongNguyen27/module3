<?php
namespace Model;
use PDO;
class Contact{
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
}
?>