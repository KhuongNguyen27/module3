<?php
include_once 'Manager.php';
use Manager\Manager;
global $conn;
$id = $_GET['id'];
$sql = "SELECT * FROM employee WHERE ID = ".$_GET['id'];
$mysql = $conn->query($sql);
$mysql->setFetchMode(PDO::FETCH_ASSOC);
$rows = $mysql->fetchAll();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Date_of_start = $_POST['Date_of_start'];
    $Address = $_POST['Address'];
    $Position = $_POST['Position'];
    try {
        $sql = "UPDATE employee SET First_name = '$First_name', Last_name = '$Last_name', Date_of_start = '$Date_of_start', Address = '$Address', Position = '$Position' WHERE ID = $id ";
        $manager = new Manager();
        $manager->querySql($sql);
        ?>
        <script>
            if (confirm('Update successfull')) 
            { 
            window.location.href = '../index.php';
            }
        </script>
    <?php
    } catch (Exception $e) {
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form method = 'POST'>
        <?php foreach($rows as $row):?>
        <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" value="<?php echo $row['First_name']?>" name="First_name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Last_name</label>
            <input type="text" class="form-control" value="<?php echo $row['Last_name']?>" name="Last_name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Date_of_start</label>
            <input type="text" class="form-control" value="<?php echo $row['Date_of_start']?>" name="Date_of_start">
        </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            <input type="text" class="form-control" value="<?php echo $row['Address']?>" name="Address">
        </div>
        <div class="mb-3">
            <label  class="form-label">Position</label>
            <input type="text" class="form-control" value="<?php echo $row['Position']?>" name="Position">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php endforeach;?>
    </form>
</body>
</html>