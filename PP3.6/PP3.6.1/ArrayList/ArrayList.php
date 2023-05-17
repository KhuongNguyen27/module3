<?php
    namespace ArrayList;
    use Exception;
    class ArrayList{
        public array $arraylist;
        public function __construct($arr = ""){
            if (is_array($arr)) {
                $this->arraylist = $arr;
            }else{
                $this->arraylist = [];
            }
        }
        public function add($item){
            array_push($this->arraylist,$item); 
        }
        public function isInteger($toCheck){
            return preg_match("/^[0-9]+$/",$toCheck);
        }
        public function size(){
            return count($this->arraylist);
        }
        public function get($index){
            if($this->isInteger($index) && $index < $this->size()){
                return $this->arraylist[$index];
            }else {
                throw new Exception("Index isn't Available");
            }
        }
    }
?>