<?php
class CylinderElement{
    private int|float $radius;
    private int|float $height;
    public function __construct($radius,$height){
        $this->radius = $radius;
        $this->height = $height;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    } 
    public function setHeight($height){
        $this->height = $height;
    }  
    public function getRadius(){
        return $this->radius;
    } 
    public function getHeight(){
        return $this->height;
    }
    public function getBasePerimeter(): float|int
    {
        return M_PI*$this->radius*2;
    }
    public function getBaseArea(): float|int
    {
        return  M_PI*pow($this->radius,2);
    }
    public function getVolume(): float|int
    {
        $baseArea = $this->getBasePerimeter();
        $perimeter = $this->getBaseArea();
        return $perimeter * $this->height + 2 * $baseArea;
    }
    public function __toString(){
        return 'BaseArea : '.$this->getBaseArea().', BasePerimeter : '.$this->getBasePerimeter().', Volume : '.$this->getVolume();
    } 
}
?>