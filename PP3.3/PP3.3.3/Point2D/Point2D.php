<?php
namespace Point2D;
class Point2D{
    protected int|float $x; 
    protected int|float $y;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function getX() : float|int {
        return $this->x;
    } 
    public function getY() : float|int {
        return $this->y;
    }
    public function setX($x){
        $this->x = $x ;
    } 
    public function setY($y){
        $this->y = $y ;
    }
    public function setXY($x,$y){
        $this->x = $x;    
        $this->y = $y;    
    }
    public function getXY() : array {
        $display[] = $this->x;    
        $display[] = $this->y;
        return $display;    
    }
    public function __toString() : string {
        return "X = ".$this->x.", Y = ".$this->y;
    }
}
?>