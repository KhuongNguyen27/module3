<?php
abstract class Shape{
    protected static int|float $radius;
    protected static string $name;
    protected static string $color;

    abstract protected function setRadius($radius);
    abstract protected function getRadius();
    abstract protected function setName($name);
    abstract protected function getName();
    abstract protected function setColor($color);
    abstract protected function getColor();
    abstract protected function getArea();
    abstract protected function getPerimeter();
    abstract protected function _toString();
}
?>