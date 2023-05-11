<?php
include_once 'Manager.php';
use Manager\Manager;
global $conn;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Date_of_start = $_POST['Date_of_start'];
    $Address = $_POST['Address'];
    $Position = $_POST['Position'];
    try {
        $sql = "INSERT INTO employee(First_name,Last_name,Date_of_start,Address,Position) VALUE('$First_name','$Last_name','$Date_of_start','$Address','$Position')"; 
        // echo $sql;
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
        <div class="mb-3">
            <label  class="form-label">First name</label>
            <input type="text" class="form-control" placeholder="John" name="First_name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Last name</label>
            <input type="text" class="form-control" placeholder="David" name="Last_name">
        </div>
        <div class="mb-3">
            <label  class="form-label">Date of start</label>
            <input type="text" class="form-control" placeholder="YY-MM-DD" name="Date_of_start">
        </div>
        <div class="mb-3">
            <label  class="form-label">Address</label>
            <input type="text" class="form-control" placeholder="318 Lê Duẫn" name="Address">
        </div>
        <div class="mb-3">
            <label  class="form-label">Position</label>
            <input type="text" class="form-control" placeholder="Sales Manager" name="Position">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>