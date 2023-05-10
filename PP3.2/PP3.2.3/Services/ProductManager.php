<?php
namespace Services;
class ProductManager{
    private array $products;
    public function __construct(){
        $this->products = [];
    }
    public function add($product){
        // $this->products = $this->getProducts();
        $this->products[] = $product; 
        // echo '<pre>';
        //     print_r($this->products);
        // echo '</pre>';
        // $data= json_encode($this->products);
        // file_put_contents('Json/data.json',$data);    
    }
    public function getProducts() : array {
        // $data = file_get_contents('Json/data.json');
        // $this->products = json_decode($data,true);
        return $this->products;
    }
}
?>