<?php
namespace MoveablePoint;
use Point\Point;
class MoveablePoint extends Point{
    public float|int $xSpeed;
    public float|int $ySpeed;
    private static array $arraySpeed;
    private function __construct($x,$y,$xSpeed,$ySpeed){
        parent::__construct($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
        self::$arraySpeed[0] = $this->xSpeed;
        self::$arraySpeed[1] = $this->ySpeed;
    }
    public function getXSpeed(){
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed){
        $this->xSpeed = $xSpeed;
        self::$arraySpeed[0] = $this->xSpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed){
        $this->ySpeed = $ySpeed;
        self::$arraySpeed[1] = $this->ySpeed;
    }
    public function getSpeed() : array{
        return self::$arraySpeed;
    }
    public static function move($x,$y,$xSpeed,$ySpeed) : MoveablePoint{
        return new MoveablePoint($x,$y,$xSpeed,$ySpeed);     
    }
    public function __toString(){
        return __METHOD__;
    }
}
?>