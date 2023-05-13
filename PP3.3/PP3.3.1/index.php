<?php
// parent hình
include 'Shape.php';
// hình chữ nhật (parent::Shape)
include 'Rectangle.php';
// hình vuông (parent::Rectangle)
include 'Square.php';
//hình tròn (parent::Shape)
include 'Circle.php';
// hình trụ (parent::Circle)
include 'Cylinder.php';
// in hình tròn
$hinhtron = new Circle('Hinh tron',2);
$hinhtron->show();
echo "Area = ".$hinhtron->calculateArea().'<br>';
echo "Perimeter = ".$hinhtron->calculatePerimeter().'<br>';
// in hình trụ
$hinhtru = new Cylinder('Hinh tru',3,4);
$hinhtru->show();
echo "Area = ".$hinhtru->calculateArea().'<br>';
echo "Volume = ".$hinhtru->calculateVolume().'<br>';
// in hình chữ nhật
$chunhat = new Rectangle('Hinh chu nhat',3,4);
$chunhat->show();
echo "Area = ".$chunhat->calculateArea().'<br>';
echo "Perimeter = ".$chunhat->calculatePerimeter().'<br>';
// in hình vuông
$hinhvuong = new Square('Hinh vuong',3);
$hinhvuong->show();
echo "Area = ".$hinhvuong->calculateArea().'<br>';
echo "Perimeter = ".$hinhvuong->calculatePerimeter().'<br>';
?>