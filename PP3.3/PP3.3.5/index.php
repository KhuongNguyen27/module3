<?php
include_once 'Shape/Shape.php';
include_once 'Triangle/Triangle.php';

use Shape\Shape;

$test_1 = new Shape(5,7,9);  
echo '<pre>';
print_r($test_1);
echo 'Perimetere = '.$test_1->getPerimeter().'<br>';
echo 'Area = '.$test_1->getArea();
echo '</pre>';
$test_2 = new Triangle(8,15,17);  
echo '<pre>';
print_r($test_2);
echo 'Perimetere = '.$test_2->getPerimeter().'<br>';
echo 'Area = '.$test_2->getArea();
echo '</pre>';
?>