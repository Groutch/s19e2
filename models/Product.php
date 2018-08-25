<?php
class Product {
    private $id;
    private $name;
    private $price;
    
    public function __construct($ident,$nameP, $priceP){
        $this->id = $ident;
        $this->name = $nameP;
        $this->price = $priceP;
    }
    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;   
    }
    public function getPrice(){
        return $this->price;
    }
}