<?php
namespace ControllerBlog;
include_once 'Model/Blog.php';
use Model\Blog;
class ControllerBlog{
    function getHome(){
        $this->getBanner();
        $result = Blog::getHome();
        include_once 'Include/getHome/getHome.php';
    }
    function getBlog(){
        $result = Blog::getBlog();
        include_once 'Include/getBlog/getBlog.php';
    }
    function getPost(){
        $this->getBanner();
        $result = Blog::getPost();
        include_once 'Include/getBlog/getPost.php';
    }
    function getBanner(){
        $result = Blog::getBanner();
        include_once 'Include/Banner/Banner.php';
    }
}
?>