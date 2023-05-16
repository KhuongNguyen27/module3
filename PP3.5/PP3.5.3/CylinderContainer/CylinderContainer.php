<?php
include_once dirname(__FILE__)."/../CylinderElement/CylinderElement.php";


class CylinderContainer{
    private static array $arrayShape;
    private function __construct(){}
    public static function addShape($newShape){
        self::$arrayShape[] = $newShape;
    }
    public static function getShape(){
        return self::$arrayShape;
    }
}
?>