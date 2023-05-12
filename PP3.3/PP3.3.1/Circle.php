<?php
class Circle extends Shape  
{
    public int $radius;
    public function __construct($name,$radius){
        $this->radius = $radius;
        parent::__construct($name);
    }
    public function calculateArea() : int|float {
        return M_PI*pow($this->radius,2);
    }
    public function calculatePerimeter() : int|float {
        return (2*M_PI*$this->radius);
    }
}
?>