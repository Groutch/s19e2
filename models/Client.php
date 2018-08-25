<?php
require_once(__DIR__.'/User.php');
require_once(__DIR__.'/Product.php');
class Client extends User{
    private $billAmount;
    private $cart;
    public function __construct($ident, $admail){
        parent::__construct($ident, $admail);
        $this->billAmount=0;
        $this->cart=[];
    }
    public function buy($prod){
        $this->billAmount+=$prod->getPrice();
        $this->addProductToCart($prod);
    }
    
    public function getBill(){
        return $this->billAmount;
    }
    public function getCart(){
        return $this->cart;
    }
    public function addProductToCart($product){
        array_push($this->cart,$product);
    }
}