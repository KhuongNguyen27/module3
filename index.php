<?php
class Animal
{
    public string $name;
    public int $age;
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
}
$rabbit = new Animal('Thỏ',12);
echo $rabbit->getName().'<br>';
echo $rabbit->getAge();
?>