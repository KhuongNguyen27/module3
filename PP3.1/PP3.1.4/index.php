<?php
    class Pan {
        private string $mode;
        private int $speed;
        private int $radius;
        private string $color;
        public function __construct($mode = 'off',$radius = 5,$color = 'Blue' ,$speed = 1){
            $this->mode = $mode;
            $this->radius = $radius;
            $this->color = $color;
            $this->speed = $speed;
        }
        public function setSlow(){
            $this->speed = 1;        
        }
        public function setMedium(){
            $this->speed = 2;        
        }
        public function setFast(){
            $this->speed = 3;        
        }
        public function setMode($mode){
            $this->mode = $mode;
        }
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function setColor($color){
            $this->color = $color;
        }
        public function getMode() : string{
            return $this->mode;
        }
        public function getRadius() : int{
            return $this->radius;
        }
        public function getColor() : string{
            return $this->color;
        }
        public function getSpeed() : int{
            return $this->speed;
        }
        public function getInfor() : string {
            if($this->mode == 'on'){
            return "Pan { Speed = ".$this->getSpeed()." ,Color = ".$this->getColor()." ,Radius =".$this->getRadius()."}<br>";
            }else {
                return "Pan is off<br>";
            }
        }
    }
    $pan = new Pan('on',10,'yellow',3);
    echo $pan->getInfor();
    $pan = new Pan('of',5,'blue',2);
    echo $pan->getInfor();
?>