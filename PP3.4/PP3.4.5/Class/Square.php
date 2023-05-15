<?php
class Square implements Colorable
{
    public int $side;
    public function __construct($side){
        $this->side = $side;
    }
    public function howtoColor(){
        return "Color all four sides..";
    }
    public function __toString(){
        return "Side = ".$this->side;
    }
}

?>