<?php
    include_once 'db.php';
    include_once 'Employee/Employee.php';
    include_once 'ManagerEmployee/Manager.php';
    
    use Employee\Employee;
    use Manager\Manager;

    $sql = "SELECT * FROM Employee";
    // echo '<pre>';
    // print_r($employee);
    // echo '<pre>';
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
    <?php
    $records_per_page = 5;
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $offset = ($current_page - 1) * $records_per_page;
    $sql = "SELECT * FROM employee LIMIT $records_per_page OFFSET $offset";
    $mysql = $conn->query($sql);
    $mysql->setFetchMode(PDO :: FETCH_ASSOC);
    $employee = $mysql->fetchAll();
    $manager = new Manager();
    foreach ($employee as  $employ) {
        $manager->add(new Employee($employ['ID'], $employ['First_name'], $employ['Last_name'], $employ['Date_of_start'], $employ['Address'], $employ['Position']));
    }
    $employee = $manager->getInfor();
    ?>
    <p style='text-align:center; color:gray; ' class="fs-1" > Employee</p>
    <table class='table'>
    <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Date of start</th>
                <th scope="col">Address</th>
                <th scope="col">Position</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employee as $employ):?>
            <tr>
                <td><?php echo $employ->getID();?></td>
                <td><?php echo $employ->getFirst_name();?></td>
                <td><?php echo $employ->getLast_name();?></td>
                <td><?php echo $employ->getDate_of_start();?></td>
                <td><?php echo $employ->getAddress();?></td>
                <td><?php echo $employ->getPosition();?></td>
                <td>
                    <a onclick="return confirm('Are u want delete?');" href="http://localhost/module3/PP3.2/PP3.2.5/ManagerEmployee/Delete.php?id=<?php echo $employ->getID();?>">Delete</a>
                    <a  href="http://localhost/module3/PP3.2/PP3.2.5/ManagerEmployee/Edit.php?id=<?php echo $employ->getID();?>">Edit</a>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <?php
        $sql_count = "SELECT COUNT(*) as total FROM employee";
        $stmt_count = $conn->query($sql_count);
        $stmt_count->setFetchMode(PDO::FETCH_ASSOC);
        $row_count = $stmt_count->fetch();
        $total_records = $row_count['total'];
        $total_pages = ceil($total_records / $records_per_page);
    ?>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php for ($i=1; $i<=$total_pages; $i++) {?>
                <li style = 'margin-left: 15px' class="page-item <?php if ($i==$current_page) echo 'active'; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php } ?>
        </ul>
    </nav> 
    <form action='ManagerEmployee/Create.php' method = 'GET'>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Create</button>
        </div>
    </form>
</body>
</html>