<?php
namespace StaffController;
include_once 'Model/Staff.php';
include_once dirname(__FILE__).'/Controller.php';
use Staff\Staff;
use Controller\Controller;
class StaffController extends Controller{
    function index(){
        $result = Staff::index();
        include_once 'View/StaffView/index.php';  
    }
    function getView(){
        $row = Staff::getView();
        include_once 'View/StaffView/getView.php';  
    }
    function getEdit(){
        try {
            $row = Staff::getView();
            include_once 'View/StaffView/getEdit.php';
        } catch (Exception $e) {
            echo "<h1>Error: Please try again</h1>";
        }  
    }
    function getCreate(){
        $result = Staff::index();
        include_once 'View/StaffView/getCreate.php';  
    }
    function create(){
        try {
            Staff::create();
            $this->redirect('index.php?controller=staff');
        } catch (Exception $e) {
            echo "<h1>Error: Please try again</h1>";
        }
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
        $result = Staff::search();
        include_once 'View/StaffView/getSearch.php';
    }
}
?>