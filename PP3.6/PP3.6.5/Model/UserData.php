<?php
class User{
    static function getList(){
        global $conn;
        $sql = 'SELECT * FROM userscore';
        $mysql = $conn->query($sql);
        $mysql->setFetchMode( PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        return $rows;
    }
    static function getView($ID){
        global $conn;
        $sql = "SELECT * FROM userscore WHERE ID = $ID";
        $mysql = $conn->query($sql);
        $mysql->setFetchMode( PDO :: FETCH_ASSOC);
        $rows = $mysql->fetchAll();
        $rows = $rows[0];
        return $rows;   
    }
    static function create(){
        global $conn;
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = isset($_POST['name'])? $_POST['name'] : '';
            $score = isset($_POST['score']) && is_numeric($_POST['score'])? $_POST['score'] : '' ;
            $sql = "INSERT INTO `userscore` (`ID`, `Name`, `Score`) VALUES (NULL, '$name', '$score');";
            $conn->query($sql);
            ?>
            <script>
                if (confirm('Succesfully')) {
                    window.location = "index.php";
                }
            </script>
            <?php
        }
    }
    static function edit(){
        global $conn;
        $ID = $_GET['ID'];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $score = isset($_POST['score'])? $_POST['score'] : '';
            $name = isset($_POST['name'])? $_POST['name'] : '';
            $sql = "UPDATE `userscore` SET `Name` = '$name', `Score` = '$score' WHERE `userscore`.`ID` = $ID;";
            $conn->query($sql);
            ?>
            <script>
                if (confirm('Succesfully')) {
                    window.location = "index.php";
                }
            </script>
            <?php
        }
    }
    static function deleteID($ID){
        global $conn;
        $sql = "DELETE FROM userscore WHERE ID = $ID";
        $conn->query($sql);
        ?>
            <script>
                if (confirm('Succesfully')) {
                    window.location = "index.php";
                }
            </script>
        <?php
    }
}
?>
