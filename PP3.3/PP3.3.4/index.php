<?php
include_once 'Point/Point.php';
include_once 'MoveablePoint/MoveablePoint.php';
use Point\Point;
use MoveablePoint\MoveablePoint;

$Point2D = new Point(3,4);
echo '<pre>';
print_r($Point2D);
// print_r($Point2D->getXY());
// $Point2D->setX(5);
// $Point2D->setY(7);
// print_r($Point2D->getXY());
// $Point2D->setXY(7,8);
// print_r($Point2D->getXY());
echo '</pre>';

$PointMove = MoveablePoint::Move(3,4,5,6);
echo '<pre>';
print_r($PointMove);
echo $PointMove->__toString();
echo '</pre>';
?>