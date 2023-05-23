<?php 
    include_once 'Include/header.php';
    include_once 'db.php';
    include_once 'Controller/ProductController.php';
    include_once 'Controller/StaffController.php';
    use ProductController\ProductController;
    use StaffController\StaffController;
    $controller = isset($_GET['controller'])?$_GET['controller']: 'products ';
    $action = isset($_GET['action'])?$_GET['action']:'index';
    $ID = isset($_GET['ID'])?$_GET['ID']:'';
?>
<body id="page-top">
    <div id="wrapper">
        <?php include_once 'Include/sidebar.php'?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include_once 'Include/nav.php'?>
                <div class="container-fluid">
                    <?php include_once 'process.php'?>
                </div>
            </div>
            <?php include_once 'include/footer.php'?>
        </div>
    </div>