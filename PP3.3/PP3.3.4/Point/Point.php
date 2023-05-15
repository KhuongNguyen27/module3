<?php
namespace Point;
class Point{
    public float|int $x;
    public float|int $y;
    public static array $arrayPoint;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
        self::$arrayPoint[0] = $this->x;
        self::$arrayPoint[1] = $this->y;
    }
    public function setX($x){
        $this->x = $x;
        self::$arrayPoint[0] = $this->x;
    }
    public function getX(){
        return $this->x;
    }
    public function setY($y){
        $this->y = $y;
        self::$arrayPoint[1] = $this->y;
    }
    public function getY(){
        return $this->y;
    }
    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
        self::$arrayPoint[0] = $this->x;
        self::$arrayPoint[1] = $this->y;
    }
    public function getXY() : array{
        return self::$arrayPoint;
    }
    public function __toString() : string{
        return "X = ".$this->x.", Y = ".$this->y;
    }
}
?>