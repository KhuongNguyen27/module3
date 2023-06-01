<?php
namespace Controller;
include_once 'Model/Home.php';
use Model\Home;
class HomeController{
    function getHome()
    {
        $this->getBanner();
        $result = Home::getHome();
        include_once 'Include/Home/Content.php';
    }
    function getBlog()
    {
        $this->getBanner();
        $result = Home::getBlog();
        include_once 'Include/Home/getBlog.php';
    }
    function getBanner()
    {
        $banner = Home::getBanner();
        include_once 'Include/Header/Elements/nav.php';
    }
    function getSearch()
    {
        $this->getBanner();
        $result = Home::getSearch();
        include_once 'Include/Blog/getHome.php';
    }
    function __destruct(){}
}
?>