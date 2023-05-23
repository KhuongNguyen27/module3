<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
include_once 'db.php';
include_once 'Controller/ProductController.php';
use ProductController\ProductController;
$action = isset($_GET['action'])?$_GET['action']:'index';
$ID = isset($_GET['ID'])?$_GET['ID']:'';
$objProductController = new ProductController();
switch ($action) {
    case 'index':
        $objProductController->index();
        break;
    case 'getView':
        $objProductController->getView();
        break;
    case 'delete':
        $objProductController->delete();
        break;
    case 'getEdit':
        $objProductController->getEdit();
        break;
    case 'edit':
        $objProductController->edit();
        break;
    case 'getCreate':
        $objProductController->getCreate();
        break;
    case 'create':
        $objProductController->create();
        break;
    case 'search':
        $objProductController->search();
        break;
}
?>