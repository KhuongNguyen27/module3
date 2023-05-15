<?php

include dirname(__FILE__)."/ClassChild/CircleComparator.php";

$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
print_r($circleComparator->compare($circleOne, $circleTwo));
?>