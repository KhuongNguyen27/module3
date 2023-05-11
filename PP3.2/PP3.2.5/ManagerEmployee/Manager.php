<?php
namespace Manager;
include_once 'db.php';
global $conn;
use PDO;
class Manager{
    public static array $employs=[];
    public function add($employ){
        self::$employs[]=$employ;
    }
    public function getInfor(){
        return self::$employs;
    }
    public function querySql($sql){
        global $conn;
        $conn->query($sql);
    }
    public function __destruct(){}
}