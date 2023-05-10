<?php 
include_once "Models/products.php";
include_once "Services/ProductManager.php";

use Models\Products;
use Services\ProductManager;
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    try {
        $name=$_GET['name'];
        $price=$_GET['price'];
        $amount=$_GET['amount'];
        $manager = new ProductManager();
        $manager->add(new Products("$name", "$price", "$amount"));
        header("Location: http://localhost/module3/PP3.2/PP3.2.3/");
    } catch (Exception $e) {
        if (isset($_GET['name']) == false) {
            $error[] = 'Please insert Name product'; 
        }
        if (isset($_GET['price'])== false) {
            $error[] = 'Please insert Price product'; 
        }
        if (isset($_GET['name']) == false) {
            $error[] = 'Please insert Name product'; 
        }
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
    <form style='margin-left:40px; margin-top:20px' action='' method="get">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Name product</label>
            <input type="text" class="form-control"  placeholder="Name product" name = 'name'>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Price</label>
            <input type="text" class="form-control" placeholder="Price" name = 'price' >
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Amount</label>
            <input type="text" class="form-control" placeholder="Amount" name = 'amount'>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
    <?php
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo $error;
        }
    }
    ?>
</body>

</html>