<?php

    include_once dirname(__FILE__)."/PizzBuzz/FizzBuzz.php";

    $fizzBuzz = new FizzBuzz(15);
    echo $fizzBuzz.'<br>';
    $fizzBuzz = new FizzBuzz(9);
    echo $fizzBuzz.'<br>';
    $fizzBuzz = new FizzBuzz(10);
    echo $fizzBuzz.'<br>';
?>