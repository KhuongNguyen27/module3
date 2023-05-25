<?php
namespace ControllerBlog;
include_once 'Model/Blog';
use >odel/Blog;
class ControllerBlog{
    function getHome(){
        $result = Blog::getHome();
        include_once 'Include/Content/SelectionHome.php';
    }
}
?