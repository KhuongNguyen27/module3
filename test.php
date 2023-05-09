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

class Retangle{
    private int $width;
    private int $height;
    public function __construct(int $width,int $height){
        $this->width = $width;
        $this->height = $height;
    }
    public function setWidth(int $width){
        $this->width = $width;
    }
    public function getWidth(): int{
        return $this->width;
    }
    public function setHeight(int $height){
        $this->height = $height;
    }
    public function getHeight(): int{
        return $this->height;
    }
    public function getArea() : int{
        return $this->width*$this->height;
    }
    public function getPerimeter() : int{
        return ($this->width+$this->height)*2;
    }
    public function display() : string {
        return "Retangle{ Width = ".$this->getWidth()." And Height = ".$this->getHeight()."}";
    }
    public function __destruct(){
        echo '<br>'.__METHOD__.'<br>';
    }
}
$chunhat = new Retangle(20,20);
echo $chunhat->display().'<br>';
echo $chunhat->getArea().'<br>';
echo $chunhat->getPerimeter().'<br>';
$hinhvuong = $chunhat;
unset($chunhat);
$hinhvuong->setWidth(50);
$hinhvuong->setHeight(50);
echo $hinhvuong->display().'<br>';
echo $hinhvuong->getArea().'<br>';
echo $hinhvuong->getPerimeter();
?>