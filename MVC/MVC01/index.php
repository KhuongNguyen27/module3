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
    
<?php
    include_once 'db.php';
    include_once 'Controller/StaffController.php';
    use StaffController\StaffController;
    $action = isset($_GET['action'])?$_GET['action']: 'index';
    $ID = isset($_GET['ID'])?$_GET['ID']: '';
    $objStaffController = new StaffController();
    switch ($action) {
        case 'index':
            $objStaffController->index(); 
            break;
        case 'getView':
            $objStaffController->getView(); 
            break;
        case 'getEdit':
            $objStaffController->getEdit();
            break;
        case 'getCreate':
            $objStaffController->getCreate();
            break;
        case 'create':
            $objStaffController->create();
            break;
        case 'edit':
            $objStaffController->edit();
            break;
        case 'delete':
            $objStaffController->delete();
            break;
    }
?>

</body>
</html>