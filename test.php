<?php
// class Animal
// {
//     public string $name;
//     public int $age;
//     // quy định dữ liệu $name vào là string và
//     public function __construct(string $name,int $age){
//         $this->name = $name;
//         $this->age = $age;
//     }
//     // thiết lập thuộc tính name
//     public function setName(string $name){
//         $this->name = $name;
//     }
//     public function setAge(int $age){
//         $this->age = $age;
//     }
//     // trả về giá trị thuộc tính name
//     // quy định kiểu trả về là string
//     public function getName() : string {
//         return $this->name;
//     }
//     // quy định kiểu trả về (return) là int
//     public function getAge() : int {
//         return $this->age;
//     }
//     public function __destruct(){
//         echo '<br>'.__METHOD__;
//     }
// }
// // khởi tạo đối tượng
// $rabbit = new Animal('Thỏ',12);
// // gọi phương thức getName
// echo $rabbit->getName().'<br>';
// echo $rabbit->getAge().'<br>';
// // khởi tạo đối tượng thông qua đối tượng tương tự
// $chicken = $rabbit;
// // khởi tạo thuộc tính đối tượng thứ 2
// $chicken->setName('Gà');
// $chicken->setAge(11);
// // gọi phương thức dối tượng thứ 2
// echo $chicken->getName().'<br>';
// echo $chicken->getAge();
// // xóa đối tượng $rabbit
// unset($rabbit);
// echo $rabbit->getName().'<br>';
// echo $rabbit->getAge().'<br>';

// class Retangle{
//     private int $width;
//     private int $height;
//     public function __construct(int $width,int $height){
//         $this->width = $width;
//         $this->height = $height;
//     }
//     public function setWidth(int $width){
//         $this->width = $width;
//     }
//     public function getWidth(): int{
//         return $this->width;
//     }
//     public function setHeight(int $height){
//         $this->height = $height;
//     }
//     public function getHeight(): int{
//         return $this->height;
//     }
//     public function getArea() : int{
//         return $this->width*$this->height;
//     }
//     public function getPerimeter() : int{
//         return ($this->width+$this->height)*2;
//     }
//     public function display() : string {
//         return "Retangle{ Width = ".$this->getWidth()." And Height = ".$this->getHeight()."}";
//     }
//     public function __destruct(){
//         echo '<br>'.__METHOD__.'<br>';
//     }
// }
// $chunhat = new Retangle(20,20);
// echo $chunhat->display().'<br>';
// echo $chunhat->getArea().'<br>';
// echo $chunhat->getPerimeter().'<br>';
// $hinhvuong = $chunhat;
// unset($chunhat);
// $hinhvuong->setWidth(50);
// $hinhvuong->setHeight(50);
// echo $hinhvuong->display().'<br>';
// echo $hinhvuong->getArea().'<br>';
// echo $hinhvuong->getPerimeter();

// class Animal {
//     // khởi tạo thuộc tính  
//     private string $name = 'Animal';
//     private int $age = 0;
//     public string $color = 'Black';
//     private static string $msg = 'Hello';
//     // method
//     public function setName($name){
//        $this->name = $name; 
//     }
//     public function getName() : string{
//         return $this->name;
//     }
//     public function setAge($age){
//         $this->age = $age; 
//     }
//     public function getAge() : int{
//          return $this->age;
//     }

// }
// $dog = new Animal();
// echo '<pre>';
// print_r($dog);
// echo '</pre>';
class Animal{
    protected string $name;
    private string $color = 'black';
    public function __construct($name,$color = 'black'){
        $this->name = $name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getColor(){
        return $this->color;
    }
}
class Human extends Animal{
    public function setName($name,$age = 18){
        if($age){
            $this->name = $name.$age;
        }
        else {
            $this->name = $name;
        }
    }
    public function getName(){
        return $this->name; 
    }
    // tạo color của lớp con không liên quan tới lớp cha
    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
}
$dog = new Animal('dog');
$khuong = new Human('Khương');
echo '<pre>';
print_r($dog);
print_r($khuong);
$khuong->setName('Khuong',13);
// Thuộc tính color có thể truy cập nhưng không thể thay đổi 
echo $khuong->setColor('red');
echo $dog->getName().'<br>';
echo $dog->getColor().'<br>';
echo $khuong->getName().'<br>';
echo $khuong->getColor();
echo '</pre>';
?>