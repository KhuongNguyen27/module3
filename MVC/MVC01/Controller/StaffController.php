<?php
namespace StaffController;
include_once 'Model/Staff.php';
use Staff\Staff;
class StaffController{
    function index(){
        $rows = Staff::index();
        include_once 'View/index.php';  
    }
    function getView(){
        $row = Staff::getView();
        include_once 'View/getView.php';  
    }
    function getEdit(){
        $row = Staff::getView();
        include_once 'View/getEdit.php';  
    }
    function getCreate(){
        include_once 'View/getCreate.php';  
    }
    function create(){
        Staff::create();
        ?>
        <script>
            if (confirm('Succesfully')) {
                window.location = "index.php";
            }
        </script>
        <?php
    }
    function edit(){
        Staff::edit();
        ?>
        <script>
            if (confirm('Succesfully')) {
                window.location = "index.php";
            }
        </script>
        <?php
    }
    function delete(){
        Staff::delete();
        ?>
        <script>
            if (confirm('Succesfully')) {
                window.location = "index.php";
            }
        </script>
        <?php
    }
}
?>