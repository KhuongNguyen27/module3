<?php
    class User{
        protected string $name;
        protected string $email;
        public int $role;
        protected string $access;
        private static $Expression = '/^[a-zA-Z0-9]+\@(gmail\.com|email\.com)$/';
        public function __construct($name,$email,$role=2){
            if (empty($name)) {
                $this->name = 'Please insert again Name : example';
            }else{
                $this->name = $name;
            }
            if (preg_match(self::$Expression,$email)) {
                $this->email = $email;
            }
            else {
                $this->email = 'Please insert again Email: example@gmail.com'; 
            }
            if ($role==1) {
                $this->access = ' Admin';
            }else {
                $this->access = ' User';
            }
        }
        public function setName(string $name){
            if (empty($name)) {
                $this->name = 'Please insert again Name : example';
            }else{
                $this->name = $name;
            }
        }
        public function setRole(int $role){
            if ($role==1) {
                $this->access = ' Admin';
            }else {
                $this->access = ' User';
            }
        }
        public function setEmail(string $email){
            if (preg_match(self::$Expression,$email)) {
                $this->email = $email;
            }
            else {
                $this->email = ' Please insert again Email: example@gmail.com'; 
            }
        }
        public function getInfor(){
            return '<br>Name ='.$this->name.'<br> Access Modifier = '.$this->access.'<br> Email ='.$this->email.'<br>';
        }
    }
    $khuong = new User('Khương','nguyenhuukhuong27@gmail.com',1);
    echo $khuong->getInfor();
    $long = new User('Long','Long1999@gmail.com',2);
    echo $long->getInfor();
    $long->setRole(1);
    $long->setEmail('long@example.com');
    echo $long->getInfor();
    $long->setName('');
    echo $long->getInfor();
?>