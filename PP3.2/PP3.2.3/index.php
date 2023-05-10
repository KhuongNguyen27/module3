<?php
include_once "Models/products.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Products;
$manager = new ProductManager();
$manager->add(new Products('Iphone','12','7.500.000'));
$manager->add(new Products('Laptop','14','17.500.000'));
$manager->add(new Products('Head Phone','10','750.000'));
$products = $manager->getProducts();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <table class='table' style='margin-left:40px; margin-top:20px'>
        <thead>
            <tr>
                <th scope="col">Name product</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product):?>
            <tr>
                <td><?php echo $product->getName();?></td>
                <td><?php echo $product->getPrice();?></td>
                <td><?php echo $product->getAmount();?></td>
                <!-- <td>
                    <a href="#">Delete</a>
                    <a href="#">Edit</a>
                </td> -->
            </tr>
            <?php endforeach;?>
            
        </tbody>
    </table>
    <form style='margin-left:40px; margin-top:20px' class="row g-3" action='add.php' method='post'>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
    <?php
        // echo '<pre>';
        // print_r($products);
        // echo '</pre>';
    ?>
</body>

</html>