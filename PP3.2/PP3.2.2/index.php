<?php
    class Validate{
        private static $create;
        // thiết lập private cho hàm __construct (khởi tạo bằng new Class() không thể sử dụng)
        private function __construct(){}
        // thiết lập hàm static trả về class hiện tại 
        public static function getCreate() : Validate{
            if (self::$create === NULL) {
                self::$create = new Validate();
            }
            return self::$create;
        } 
    }
    echo '<pre>';
    // Khởi tạo 1 đối tượng duy nhất và các biến tham chiếu $name1 và $name2
    $name1 = Validate::getCreate();
    print_r($name1);
    $name2 = Validate::getCreate();
    print_r($name2);
    // $name = new Validate(); // Error
    echo '</pre>';
?>
