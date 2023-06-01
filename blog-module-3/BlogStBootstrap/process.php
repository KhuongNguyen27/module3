<?php
include_once 'db.php';
include_once 'Controller/BlogController.php';
use Controller\BlogController;
include_once 'Controller/HomeController.php';
use Controller\HomeController;
include_once 'Controller/ContactController.php';
use Controller\ContactController;
include_once 'Controller/AboutController.php';
use Controller\AboutController;
$action = isset($_GET['action'])?$_GET['action']:'getHome';
switch ($controller) {
    case 'home':
        $objController = new HomeController();
        break;
    case 'blog':
        $objController = new  BlogController();
        break;
    case 'contact':
        $objController = new  ContactController();
        break; 
    case 'about':
        $objController = new  AboutController();
        break;        
    }
switch ($action) {
    case 'getHome':
        $objController->getHome();
        break;
    case 'getBlog':
        $objController->getBlog();
        break;
    case 'getSearch':
        $objController->getSearch();
        break;
}
?>

