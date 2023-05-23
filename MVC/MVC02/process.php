<?php
use ProductController\ProductController;
use StaffController\StaffController;
switch ($controller) {
    case 'products':
        $objController = new ProductController();
        break;  
    case 'staff':
        $objController = new StaffController();
        break;      
}
switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'getView':
        $objController->getView();
        break;
    case 'delete':
        $objController->delete();
        break;
    case 'getEdit':
        $objController->getEdit();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'getCreate':
        $objController->getCreate();
        break;
    case 'create':
        $objController->create();
        break;
    case 'search':
        $objController->search();
        break;
}
?>