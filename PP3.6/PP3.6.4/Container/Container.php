<?php
namespace Container;
use Exception;
include_once dirname(__FILE__).'/../Elements/Node.php';
use Node\Node;
class LinkedList{
    private $count;
    private $firstNode;
    private $lastNode;
    function add($data){
        if (is_null($this->firstNode)) {
            $this->addFirst($data);
        }else {
            $this->addLast($data);
        }
    }
    function addFirst($data){
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;
        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }
        $this->count++;
    }
    function addLast($data){
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
        }else {
            $this->addFirst($data);
        }
        $this->count++;
    }
    function get($index){
        if (is_numeric($index) && $index<=$this->count) {
            $current = $this->firstNode;
            // $current = clone $this->firstNode;
            $position = 1;
            while ($position <= $this->count) {
                if ($position == $index) {
                    $item = $current;
                    $item = clone $current;
                    $item->next = null;
                    return $item;
                }
                $current = $current->next;
                $position++;
            }
        }
    }
    function remove($index){
        if (is_numeric($index) && $index<=$this->count) {
            $current = $this->firstNode;
            $position = 1;
            while ($position <= $this->count) {
                if ($position == $index-1) {
                    $current->next = $current->next->next;
                    return $current;
                }
                $current = $current->next;
                $position++;
            }
        }
    }
    function contains($item){
        $current = $this->firstNode;
        while ($current != null) {
            if($current->data == $item)
                return true;
            $current = $current->next;
        }
        return false;
    }
    function indexOf($item){
        $current = $this->firstNode;
        $position = 1;
        while ($current != null) {
            if($current->data == $item)
                return $position;
            $current = $current->next;
            $position++;
        }
    }
    function clone(){
        $value = new LinkedList();
        $current = $this->firstNode;
        while ($current != null) {
            $value->add($current->data);
            $current = $current->next; 
        }
        return $value;
    }
    function printList(){
        $current = $this->firstNode;
        while ($current != null) {
            echo $current->data.'<br>';
            $current = $current->next;
        }
    }
    function size(){
        return $this->count;
    }
    function getList(){
        return $this->firstNode;
    }
}
?>  