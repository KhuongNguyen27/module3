<?php
include_once dirname(__FILE__).'/CylinderContainer/CylinderContainer.php';

// use CylinderContainer;

echo '<pre>';
CylinderContainer::addShape(new CylinderElement(3,5));
CylinderContainer::addShape(new CylinderElement(7,10));
CylinderContainer::addShape(new CylinderElement(2,6));
$Shape_test_1 = CylinderContainer::getShape();
print_r($Shape_test_1);
foreach ($Shape_test_1 as $Shape) {
    // echo $Shape->getRadius();
    // print_r($Shape);
    echo $Shape->__toString().'<br>';
}
echo '</pre>';
?>