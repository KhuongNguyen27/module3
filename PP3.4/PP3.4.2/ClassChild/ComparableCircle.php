<?php
include_once dirname(__FILE__)."/../ClassParent/Circle.php";
include_once dirname(__FILE__)."/../Interface/Comparable.php";
class ComparableCircle extends Circle implements Comparable{
    public function compareTo($objTwo): string
    {
        $circleTwoRadius = $objTwo->getRadius();

        if ($this->getRadius() > $circleTwoRadius) {
            return $this->getRadius()." > ".$circleTwoRadius;
        } else if ($this->getRadius() < $circleTwoRadius) {
            return $this->getRadius()." < ".$circleTwoRadius;
        } else {
            return $this->getRadius()." = ".$circleTwoRadius;
        }
    }
}
?>