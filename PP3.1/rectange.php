<?php
class Rectangle {
    private int $width;
    private int $height;
    public function __construct(int $width,int $height){
        $this->height = $height;
        $this->width = $width;
    }
    public function getWidth(){
        return $this->width;       
    }
    public function getHeight(){
        return $this->height;       
    }
    public function getArea() : int {
        return $this->width*$this->height;
    }
    public function getPerimeter() : int {
        return ($this->width + $this->height)*2;
    }
    public function display() : string {
        return "Retangle{ Width = ".$this->getWidth()." And Height = ".$this->getHeight()."}";
    } 
}
$chunhat = new Rectangle(20,10);
echo $chunhat->display().'<br>';
echo $chunhat->getArea().'<br>';
echo $chunhat->getPerimeter();
?>