<?php
namespace Shape;
class Shape{
    protected float|int $a;
    protected float|int $b;
    protected float|int $c;
    public function __construct($a,$b,$c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function setA($a){
        $this->a = $a;
    }
    public function getA(){
        return $this->a;
    }
    public function setB($b){
        $this->b = $b;
    }
    public function getB(){
        return $this->b;
    }
    public function setC($c){
        $this->c = $c;
    }
    public function getC(){
        return $this->c;
    }
    public function getPerimeter(){
        return ($this->a + $this->b + $this->c);
    }
    public function getArea(){
        $p = ($this->getPerimeter())/2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
}
?>