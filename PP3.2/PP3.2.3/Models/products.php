<?php
namespace Models;
class Products{
    private string $name;
    private string $price;
    private string $amount;
    public function __construct(string $name = '', string $price = '', string $amount = ''){
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
    public function setName(string $name){
        $this->name = $name;
    }
    public function getName() : string{
        return $this->name;
    }
    public function setPrice(string $price){
        $this->price = $price;
    }
    public function getPrice() : string{
        return $this->price;
    }
    public function setAmount(string $amount){
        $this->amount = $amount;
    }
    public function getAmount() : string{
        return $this->amount;
    }
}

?>