<?php
// hình vuông
class Square extends Rectangle{
    public function __construct($name,$width){
        parent::__construct($name,$width,$width);
    }
}
?>