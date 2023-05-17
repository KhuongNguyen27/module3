<?php

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator): string
    {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperand;dsadasd
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    return "Can not divide by 0";
                }
            default:
                return "Unsupported operation";
        }
    }
}
$variable_test = new Calculator();
echo '<pre>';
echo $variable_test->calculate(7,8,'+'); 
echo '<br>';
echo $variable_test->calculate(7,8,'/'); 
echo '<br>';
echo $variable_test->calculate(7,0,'/');
echo '<br>';
echo $variable_test->calculate(7,8,'*');  
echo '</pre>';