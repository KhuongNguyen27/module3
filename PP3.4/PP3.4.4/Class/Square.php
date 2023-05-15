<?php
class Square implements Resizeable
{
    public int $side;
    public function __construct($side){
        $this->side = $side;
    }
    public function resize(){
        $size = rand(1,100);
        $this->side *= $size;
        return "New side = ".$this->side."<br> Size = ".$size;
    }
    public function __toString(){
        return "Side = ".$this->side;
    }
}

?>