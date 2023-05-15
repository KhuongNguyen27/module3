<?php
    include_once dirname(__FILE__)."/Interface/Colorable.php";
    include_once dirname(__FILE__)."/Class/Circle.php";
    include_once dirname(__FILE__)."/Class/Square.php";
    include_once dirname(__FILE__)."/Class/Rectangle.php";

    $Shapes[0] = new Circle(4);
    $Shapes[1] = new Rectangle(3,4);
    $Shapes[2] = new Square(4);
    foreach ($Shapes as $Shape) {
        echo $Shape->__toString().'<br>';
        if ($Shape instanceof Colorable) {
            echo $Shape->howtoColor();
        }
        echo "<br>";
    }
?>