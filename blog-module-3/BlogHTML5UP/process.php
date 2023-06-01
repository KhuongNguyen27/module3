<?php
    include_once 'Controller/ControllerBlog.php';
    use ControllerBlog\ControllerBlog;
    
    switch ($controller) {
        case 'local':
            $objController = new ControllerBlog();
            break;
    }
    switch ($action) {
        case 'getHome':
            $objController->getHome();
            break;
        case 'getBlog':
            $objController->getBlog();
            break;
        case 'getPost':
            $objController->getPost();
            break;
    }
?>

