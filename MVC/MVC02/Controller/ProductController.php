<?php
namespace ProductController;
include_once 'Model/Products.php';
use Products\Products;
class ProductController{
    function index(){
        $rows = Products::index();
        include_once 'View/index.php';
    }
    function getView(){
        $rows = Products::getView();
        include_once 'View/getView.php';
    }
    function delete(){
        Products::delete();
        $this->redirect('index.php');
    }
    function getEdit(){
        $rows = Products::getView();
        include_once 'View/getEdit.php';
    }
    function edit(){
        $rows = Products::edit();
        $this->redirect('index.php');
    }
    function getCreate(){
        include_once 'View/getCreate.php';
    }
    function create(){
        Products::create();
        $this->redirect('index.php');
    }
    function search(){
        $rows = Products::search();
        include_once 'View/getSearch.php';
    }
    function redirect($url){
    ?>
        <script>
            if (confirm('Succesfull')) {
                window.location = "<?= $url?>"
            }
        </script>
    <?php
    }
}
?>