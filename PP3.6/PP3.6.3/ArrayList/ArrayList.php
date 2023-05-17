<?php
namespace ArrayList;
use Exception;
class ArrayList{
    private array $elements;
    private int $size;
    function __construct(){
        $this->elements = [];
    }
    function add($item){
        array_push($this->elements,$item);
    }
    function insert($index,$item){
        $this->size = count($this->elements);
        if(is_numeric($index) && $index < $this->size){
            array_splice($this->elements,$index,0,$item);
        }else {
            throw new Exception("Index isn't available");
        }
    }
    function remove($index){
        if (is_numeric($index)) {
            array_splice($this->elements,$index,1);
        }else {
            throw new Exception("Index isn't available");
        }
    }
    function get($index){
        if(is_numeric($index) && $index < $this->size){
            return $this->elements[$index];
        }else {
            throw new Exception("Index isn't available");
        }
    }
    function clear(){
        $this->elements = [];
    }
    function indexOf($item){
        return array_search($item,$this->elements);
    }
    function addAll($arr){
        return $this->elements = array_merge($this->elements,$arr);
    }
    function isEmpty(){
        return empty($this->elements);
    }
    function sort(){
        sort($this->elements);
    }
    function size(){
        $this->size = count($this->elements);
        return $this->size;
    }
}
?>