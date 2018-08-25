<?php
require_once(__DIR__.'/Product.php');
class Cloth extends Product{
    private $brand;
    public function __construct($ident,$nameP,$priceP,$brandC){
        parent::__construct($ident,$nameP, $priceP);
        $this->brand = $brandC;
    }
    
    public function getBrand(){
        return $this->brand;
    }
    
    public function try(){
        return "tried";
    }
}