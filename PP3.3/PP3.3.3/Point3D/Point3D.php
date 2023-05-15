<?php
namespace Point3D;

use Point2D\Point2D;

class Point3D extends Point2D{
    public int $z;
    public function __construct($x,$y,$z){
        parent::__construct($x,$y);
        $this->z = $z;
    }
    public function setZ($z){
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
    public function setXYZ($x,$y,$z){
        parent::$x = $x;
        parent::$y = $y;
        $this->z = $z;
    }
    public function __toString() : string {
        $display =  parent::__toString();
        $display .= ", Z = ".$this->z;
        return $display;
    }
}
?>