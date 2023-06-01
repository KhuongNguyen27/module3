<?php
namespace Controller;
include_once 'Model/Blog.php';
use Model\Blog;
class BlogController{
    function getBlog()
    {
        $this->getBanner();
        $result = Blog::getBlog();
        include_once 'Include/Blog/getBlog.php';
    }
    function getBanner(){
        $banner = Blog::getBanner();
        include_once 'Include/Header/Elements/nav.php';
    }
    function getHome(){
        $this->getBanner();
        $action = isset($_GET['action'])?$_GET['action']:'getHome';
        $table = isset($_REQUEST['blogcontroller'])?$_REQUEST['blogcontroller']:'blogphp';
        switch ($table) {
            case 'blogphp':
                $result = Blog::getHome();
                break;
            case 'blogjs':
                $result = Blog::getJS();
                break;
            case 'blogsql':
                $result = Blog::getSQL();
                break;
            }
        include_once 'Include/Blog/getHome.php';
    }
    function getSearch()
    {
        $this->getBanner();
        $result = Blog::getSearch();
        include_once 'Include/Blog/getHome.php';
    }
    function __destruct(){}
}
?>