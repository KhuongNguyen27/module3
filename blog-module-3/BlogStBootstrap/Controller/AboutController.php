<?php
namespace Controller;
include_once 'Model/About.php';
use Model\About;
class AboutController{
    function getHome(){
        $this->getBanner();
        include_once 'Include/About/about.php';
    }
    function getBanner(){
        $banner = About::getBanner();
        include_once 'Include/Header/Elements/nav.php';
    }
}
?>