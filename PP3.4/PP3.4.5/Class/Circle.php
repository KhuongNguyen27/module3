<?php
class Circle
{
    public int $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function __toString(){
        return "Radius = ".$this->radius;
    }
}

?>