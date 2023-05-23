<?php
namespace StaffController;
include_once 'Model/Staff.php';
include_once 'Controller.php';
use Staff\Staff;
use Controller\Controller;
class StaffController extends Controller{
    function index(){
        $rows = Staff::index();
        include_once 'View/StaffView/index.php';  
    }
    function getView(){
        $row = Staff::getView();
        include_once 'View/StaffView/getView.php';  
    }
    function getEdit(){
        $row = Staff::getView();
        include_once 'View/StaffView/getEdit.php';  
    }
    function getCreate(){
        include_once 'View/StaffView/getCreate.php';  
    }
    function create(){
        Staff::create();
        $this->redirect('index.php?controller=staff');
    }
    function edit(){
        Staff::edit();
        $this->redirect('index.php?controller=staff');
    }
    function delete(){
        Staff::delete();
        $this->redirect('index.php?controller=staff');
    }
    function search(){
        $rows = Staff::search();
        include_once 'View/StaffView/getSearch.php';
    }
}
?>