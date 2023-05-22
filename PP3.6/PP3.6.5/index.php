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
include_once 'Controller/UserController.php';
$action = isset($_GET['action'])?$_GET['action'] : 'getList';
$ID = isset($_GET['ID'])?$_GET['ID'] : '';
switch ($action) {
    case 'getList':
        $controller = new UserController();
        $controller->getList();
        break;
    case 'getCreate':
        $controller = new UserController();
        $controller->getCreate();
        break;
    case 'create':
        $controller = new UserController();
        $controller->create();
        break;
    case 'getEdit':
        $controller = new UserController();
        $controller->getEdit($ID);
        break;
    case 'edit':
        $controller = new UserController();
        $controller->edit();
        break;
    case 'getView':
        $controller = new UserController();
        $controller->getView($ID);
        break;
    case 'deleteID':
        $controller = new UserController();
        $controller->deleteID($ID);
        break;       
}
?>

</body>
</html>