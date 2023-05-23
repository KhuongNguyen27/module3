<?php
use ProductController\ProductController;
use StaffController\StaffController;

switch ($controller) {
    case 'products':
        $objController = new ProductController();
        include_once 'Include/process.php';
        break;  
    case 'staff':
        $objController = new StaffController();
        include_once 'Include/process.php';
        break;      
    case 'local':
        include_once 'Include/controller.php';
        break;
}
?>