<?php
    class Application {
        private $name;
        private static int $count=0;
        public function __construct(string $name){
            $this->name = $name;
            self::$count++;
        }
        public static function getCount(){
            return 'Count : '.self::$count.'<br>';
        }
        public function display() : string{
            return "Application : ".$this->name.'<br>';
        }
    }
    echo '<pre>';
    echo Application::getCount();
    $name1 = new Application('App1');
    echo $name1->display();
    echo Application::getCount();
    $name2 = new Application('App2');
    echo $name1->display();
    echo Application::getCount();
     print_r($name1);
     echo '<br>';
     print_r($name2);
    echo '</pre>';
?>