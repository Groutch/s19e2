<?php

use PHPUnit\Framework\TestCase;
require_once(__DIR__.'/../models/Product.php');

class ProductTest extends TestCase
{
    public $prodTest;
    public function testAttributeObject()
    {
        $this->prodTest = new Product(1,"truc",30);
        $this->assertObjectHasAttribute("id", $this->prodTest);
        $this->assertObjectHasAttribute("name", $this->prodTest);
        $this->assertObjectHasAttribute("price", $this->prodTest);
    }
    
    public function testGetClass()
    {
        $this->prodTest = new Product(1,"truc",30);
        $this->assertEquals(get_class($this->prodTest),"Product");
    }
}
