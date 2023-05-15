<?php
include_once dirname(__FILE__)."/../Animal.php";
include_once dirname(__FILE__)."/../../Edible/Edible.php";
class Chicken extends Animal implements Edible
{
    public function makeSound() : string{
        return "Chicken : cuck-cuck-tak";
    }
    public function howtoEat() : string{
        return "Chicken : could be fried";
    }
}

?>