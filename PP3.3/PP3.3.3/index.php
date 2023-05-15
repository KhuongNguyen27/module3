<?php
include_once "Point2D\Point2D.php";
include_once "Point3D\Point3D.php";

use Point2D\Point2D;
use Point3D\Point3D;

$point_test_1 = new Point2D(3,4);
$point_test_2 = new Point3D(3,4,5);
echo '<pre>';
print_r($point_test_1);
print_r($point_test_2);
echo $point_test_1->__toString().'<br>';
echo $point_test_2->__toString();
echo '</pre>';
?>