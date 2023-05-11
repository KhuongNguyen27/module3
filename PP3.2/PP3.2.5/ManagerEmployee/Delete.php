<?php
include_once 'Manager.php';
use Manager\Manager;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    try {
        $id = $_GET['id'];
        $sql = "DELETE FROM employee WHERE ID = ".$_GET['id'];
        $manager = new Manager();
        $manager->querySql($sql);
    ?>
        <script>
            if (confirm('Delete successfull')) 
            { 
            window.location.href = '../index.php';
            }
        </script>
    <?php
    } catch (Exception $e) {
    ?>
        <script>
            if (confirm('Delete Error')) 
            { 
            window.location.href = '../index.php';
            }
        </script>
    <?php
    }
}
?>