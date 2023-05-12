<?php 
class Shape{
    public string $name;
    public function __construct($name = 'Shape'){
        $this->name = $name;
    }
    public function show(){
        echo "<br>Hi, I am ".$this->name."<br>";
    }
}
?>