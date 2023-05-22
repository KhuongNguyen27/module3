<?php
include_once dirname(__FILE__).'/../Model/UserData.php';
global $conn;
class UserController   
{
    function getList(){
        $rows = User::getList();
        include_once dirname(__FILE__).'/../View/getList.php';
    }
    function getCreate(){
        include_once dirname(__FILE__).'/../View/Create.php';
    }
    function create(){
        User::create();
    }
    function getView($ID){
        $rows = User::getView($ID);
        include_once dirname(__FILE__).'/../View/ViewID.php';
    }
    function getEdit($ID){
        $rows = User::getView($ID);
        include_once dirname(__FILE__).'/../View/EditID.php';
    }
    function edit(){
        User::edit();
    }
    function deleteID($ID){
        User::deleteID($ID);
    }
}
?>