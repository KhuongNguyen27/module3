<?php
    include_once dirname(__FILE__)."/../Fruit.php";
    include_once dirname(__FILE__)."/../../Edible/Edible.php";
    class Apple extends Fruit
    {
        public function howtoEat() : string{
            return "Apple : could be juice";
        }
    }
    
?>