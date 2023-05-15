<?php
include_once "Animals/Chicken/Chicken.php";
include_once "Animals/Tiger/Tiger.php";
include_once "Fruits/Apple/Apple.php";
include_once "Fruits/Orange/Orange.php";

echo("-------Animal<br>");
$animals[] = new Tiger();
$animals[] = new Chicken();
foreach ($animals as $animal) {
    echo $animal->makeSound().'<br>';
    if ($animal instanceof Edible) {
        echo $animal->howtoEat();
    }
}
echo("<br>-------Fruit<br>");
$Fruits[] = new Orange();
$Fruits[] = new Apple();
foreach ($Fruits as $Fruit) {
    echo $Fruit->howtoEat().'<br>';
    if ($Fruit instanceof Animal) {
        echo $Fruit->makeSound();
    }
}
?>