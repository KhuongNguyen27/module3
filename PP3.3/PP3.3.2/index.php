<?php

include_once 'Shape.php';
include_once 'Circle.php';
include_once 'Cylinder.php';
$hinhtron = new Circle('hình tròn','black',3);
echo $hinhtron->_toString().'<br>';
$hinhtru = new Cylinder('hình trụ','red',3,4);
echo $hinhtru->_toString();
?>