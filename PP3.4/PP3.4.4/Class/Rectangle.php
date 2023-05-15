<?php
class Rectangle implements Resizeable
{
    public int $side_1,$side_2;
    public function __construct($side_1,$side_2){
        $this->side_1 = $side_1;
        $this->side_2 = $side_2;
    }
    public function resize(){
        $size = rand(1,100);
        $this->side_1 *= $size;
        $this->side_2 *= $size;
        return "New side_1 = ".$this->side_1.", New side_2 = ".$this->side_2."<br> Size = ".$size;;
    }
    public function __toString(){
        return "Side_1 = ".$this->side_1.", Side_2 = ".$this->side_2;
    }
}

?>