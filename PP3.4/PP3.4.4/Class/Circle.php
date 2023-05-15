<?php
class Circle implements Resizeable
{
    public int $radius;
    public function __construct($radius){
        $this->radius = $radius;
    }
    public function resize(){
        $size = rand(1,100);
        $this->radius *= $size;
        return "New radius = ".$this->radius."<br> Size = ".$size;;
    }
    public function __toString(){
        return "Radius = ".$this->radius;
    }
}

?>