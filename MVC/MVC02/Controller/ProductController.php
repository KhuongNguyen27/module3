<?php
namespace ProductController;
include_once 'Model/Products.php';
include_once dirname(__FILE__).'/Controller.php';
use PDO;
use Products\Products;
use Controller\Controller;
class ProductController extends Controller{
    function index(){
        $result = Products::index();
        include_once 'View/ProductsView/index.php';
    }
    function getView(){
        $rows = Products::getView();
        include_once 'View/ProductsView/getView.php';
    }
    function delete(){
        Products::delete();
        $this->redirect('index.php?controller=products');
    }
    function getEdit(){
        $rows = Products::getView();
        include_once 'View/ProductsView/getEdit.php';
    }
    function edit(){
        $rows = Products::edit();
        $this->redirect('index.php?controller=products');
    }
    function getCreate(){
        include_once 'View/ProductsView/getCreate.php';
    }
    function create(){
        Products::create();
        $this->redirect('index.php?controller=products');
    }
    function search(){
        $result = Products::search();
        include_once 'View/ProductsView/getSearch.php';
    }
}
?>