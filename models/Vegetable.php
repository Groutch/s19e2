<?php
require_once(__DIR__.'/Product.php');
class Vegetable extends Product{
    private $productorName;
    private $expireAt;
    public function __construct($ident,$nameP,$priceP,$prodName,$expAt){
        parent::__construct($ident,$nameP, $priceP);
        $this->productorName = $prodName;
        $this->expireAt = $expAt;
    }
    
    public function getProductorName(){
        return $this->productorName;
    }
    
    public function getExpireAt(){
        return $this->expireAt;
    }
    
    public function isFresh(){
        return time()<strtotime($this->expireAt);
    }
}