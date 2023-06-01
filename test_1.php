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
// class Animal{
//     protected string $name;
//     private string $color = 'black';
//     public function __construct($name,$color = 'black'){
//         $this->name = $name;
//     }
//     public function setName($name){
//         $this->name = $name;
//     }
//     public function getName(){
//         return $this->name;
//     }
//     public function getColor(){
//         return $this->color;
//     }
// }
// class Human extends Animal{
//     public function setName($name,$age = 18){
//         if($age){
//             $this->name = $name.$age;
//         }
//         else {
//             $this->name = $name;
//         }
//     }
//     public function getName(){
//         return $this->name; 
//     }
//     // tạo color của lớp con không liên quan tới lớp cha
//     public function setColor($color){
//         $this->color = $color;
//     }
//     public function getColor(){
//         return $this->color;
//     }
// }
// $dog = new Animal('dog');
// $khuong = new Human('Khương');
// echo '<pre>';
// print_r($dog);
// print_r($khuong);
// $khuong->setName('Khuong',13);
// // Thuộc tính color có thể truy cập nhưng không thể thay đổi 
// echo $khuong->setColor('red');
// echo $dog->getName().'<br>';
// echo $dog->getColor().'<br>';
// echo $khuong->getName().'<br>';
// echo $khuong->getColor();
// echo '</pre>';
// abstract class Animal{
//     public abstract function say(){}
//     public abstract function move(){}
// }
// class Human extends Animal{
//     public function say(){}
//     public function move(){}
// }
/* 
Không thể khởi tạo đối tượng
Có các method bình thường
Lớp có phương thức trừa tượng - lớp đó phải trừa tượng
Lớp kế thừa từ lớp trừa tượng, phải triển khai lại All các method abstract
Class abstract kế thừa từ Class abstract parent không cần phải triển khai lại method abstract 
Class abstract không thể final
Method abstract không thể final
extends có mối quan hệ is a 
interface có mối quan hệ can do
*/
// interface Computer{
//     const MAX_SPEED = 4.0;
//     }
    
//     class Laptop implements Computer{
//     const MAX_SPEED = 3.0;
//     }
    
//     $lap = new Laptop();
//     echo 'Max speed: ' . $lap->MAX_SPEED;

/*----------------------------------------*/

// class MyArrayList{
//     private array $elements;
//     public function get($index){
//         return $this->elements[$index];
//     }
//     public function add($item){
//         $this->elements[] = $item;
//     }
//     public function addAtPos($item,$index){
//         array_splice($this->elements,$index,0,$item);
//     }
//     public function removeByIndex($index){    
//             array_splice($this->elements,$index,1);
//     }
//     public function size(){
//         return count($this->elements);
//     }
//     public function find($item){
//         return array_search($item,$this->elements)
//     }
//     public function isEmpty(){}
// }

/*----------------------------------------*/
/*
interface Stack{
    public function push(string $item); // thêm giá trị trên cùng
    public function pop(); // xóa giá trị trên cùng
    public function top(); // trả về giá trị trên cùng,nhưng không xóa nó đi
    public function isEmpty(); // kiểm tra ngăn xếp đã đầy hay chưa 
}
class Books implements Stack{
    protected array $stack = [];
    protected $limit;
    public function __construct($limit)
    {
        $this->limit = $limit;
    }
    public function push(string $item){
        if (count($this->stack) >= $this->limit) {
            throw new Exception("Stack Full");
            
        }else {
            array_unshift($this->stack,$item);
        }
    } 
    public function pop(){
        if ($this->isEmpty()) {
            throw new Exception("Stack Empty");
        }else {
            return array_shift($this->stack);
        }
    } 
    public function top(){
        return end($this->stack);
    }
    public function isEmpty(){
        return empty($this->stack);
    } 
}
echo "<pre>";
try {
    $books = new Books(3);
    $books->push("Tin học 12");
    $books->push("Toán 12");
    $books->push("Vật lí 12");
    // $books->push("Sinh học 12");
} catch (Exception $e) {
    echo $e->getMessage();
}
print_r($books);
$books->pop();
$books->push("Hóa học 12");
print_r($books);
echo $books->top();
echo "</pre>";
*/
// class Queue{
//     public array $container = [];
//     public int $limit;
//     public function __construct($limit){
//         $this->limit = $limit;
//     }
//     public function enqueue($item){
//         if ($this->isFull()) {
//             echo "Queue Full";
//         }else {
//             array_push($this->container,$item);
//         }
//     }
//     public function dequeue(){
//         return array_shift($this->container);
//     }
//     public function size(){
//         return count($this->container);
//     }
//     public function isEmpty(){
//         return empty($this->container);
//     }
//     public function peek(){
//         if ($this->isEmpty()) {
//             echo "Queue NULL";
//         }else {
//             reset($this->container);
//             return current($this->container);
//         }
//     }
//     public function isFull(){
//         if(count($this->container) == $this->limit){
//             return true;
//         }
//         return false;
//     }
// }
//     $queue = new Queue(5);
//     $queue->enqueue('Huyen');
//     $queue->enqueue('Nho');
//     $queue->enqueue('Phong');
//     $queue->enqueue('Tam');
//     echo '<pre>';
//     print_r($queue);
//     var_dump($queue->isFull());
//     $queue->dequeue();
//     $queue->enqueue('Khương');
//     print_r($queue);
//     echo '</pre>';
//SplStack Mode is LIFO (Last In First Out)
    // $q = new SplStack();
    // echo '<pre>';
    // $q->push('Khương');
    // $q->push('Phi');
    // $q->push('Hiếu');
    // $q->push('Long');
    // $q->rewind();
    // while($q->valid()){
    //     echo $q->current(),"\n";
    //     $q->next();
    // }
    // echo '</pre>';
    // $queue = new SplQueue();
    // $queue->enqueue('Khương');
    // $queue->enqueue('Phi');
    // $queue->enqueue('Hiếu');
    // $queue->enqueue('Long');
    // $queue->rewind();
    // echo $queue->current(), "\n";
    // while ($queue->valid()) {
    //     echo $queue->current(), "\n";
    //     $queue->next();
    // }
    /*CSS */    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="grid.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class = "row">
            <div class="col-lg-12 bg-danger">Slide</div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 bg-info"> col 1</div>
            <div class="col-lg-3 col-md-6 bg-susscess"> col 2</div>
            <div class="col-lg-3 col-md-6 bg-primary"> col 3</div>
            <div class="col-lg-3 col-md-6 bg-warning"> col 4</div>
        </div>

        <!-- Tự động bố trí theo Bootstrap -->
        <div class="row">
            <div class="col-lg-6 col-md-6 bg-dark"> col 1 </div>
            <div class="col-lg-6 col-md-6 bg-danger"> col 2</div>
        </div>
    </div>
</body>

</html>