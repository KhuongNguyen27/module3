<?php
class Cylinder extends Circle{
    private int|float $height;
    public function __construct($name,$color,$radius,$height){
        parent::$name = $name;
        parent::$color = $color;
        parent::$radius = $radius;
        $this->height = $height;
    }
    public function setName($name){
        parent::$name = $name;
    }
    public function getName(){
        return parent::$name;
    }
    public function setRadius($radius){
        parent::$radius = $radius;
    }
    public function getRadius(): int|float{
        return parent::$radius;
    }
    public function setColor($color){
        parent::$color = $color;
    }
    public function getColor() : string{
        return parent::$color;
    }
    public function getArea(): int|float {
        return (M_PI*pow(parent::$radius,2))*2*$this->height;;
    }
    public function getPerimeter(): int|float{
        return (M_PI*2*parent::$radius)*2*$this->height;
    }
    public function _toString() : string{
        return "Name : ".parent::$name."<br> Color : ".parent::$color."<br> Area : ".$this->getArea()."<br> Perimeter :".$this->getPerimeter();
    }
}?>