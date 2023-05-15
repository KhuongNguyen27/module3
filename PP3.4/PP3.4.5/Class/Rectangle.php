<?php
class Rectangle
{
    public int $side_1,$side_2;
    public function __construct($side_1,$side_2){
        $this->side_1 = $side_1;
        $this->side_2 = $side_2;
    }
    public function __toString(){
        return "Side_1 = ".$this->side_1.", Side_2 = ".$this->side_2;
    }
}

?>