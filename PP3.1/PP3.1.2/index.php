<?php
class QuadraticEquation {
    private int $a;
    private int $b;
    private int $c;
    private int $delta;
    public function __construct(int $a=0,int $b=0,int $c=0){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->delta = pow($this->b,2)-4*$this->a*$this->c;
    }
    // nhập a,b,c
    public function setA (int $a){
        $this->a = $a;        
    }
    public function setB (int $b){
        $this->b = $b;        
    }
    public function setC (int $c){
        $this->c = $c;        
    }
    // xuất a,b,c
    public function getA() : int {
        return $this->a;        
    }
    public function getB() : int {
        return $this->b;        
    }
    public function getC() : int {
        return $this->c;        
    }
    // xử lí
    public function getDelta(){
        return $this->delta;
    }
    public function toString(){
        return "Equation: ".$this->a."x^2 + ".$this->b."x + ".$this->c." = 0";
    }
    public function getRoot(){
        switch (true) {
            case $this->delta > 0:
                $root_1 = (-$this->b + sqrt(pow($this->b,2)-4*$this->a*$this->c))/(2*$this->a);
                $root_2 = (-$this->b - sqrt(pow($this->b,2)-4*$this->a*$this->c))/(2*$this->a);
                return "Have two root x1 = ".$root_1.", x2 = ".$root_2;
                break;
            case $this->delta == 0:
                $root = (-$this->b + sqrt(pow($this->b,2)-4*$this->a*$this->c))/2*$this->a;
                return "Have root x1 = ".$root;
                break;
            case $this->delta < 0:
                return "The equation has no roots";
                break;
        }
    }
}
$ptb2 = new QuadraticEquation(1,2,1);
echo $ptb2->toString().'<br>';
echo $ptb2->getRoot();
?>