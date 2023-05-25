<?php
namespace Model;
class Blog{
    static function getHome(){
        global $conn;
        $sql = "SELECT * FROM blog";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode(PDO :: FETCH_ASSOC);
        $result = $mysql->fetchAll();
        return $result;
    }
}
?>