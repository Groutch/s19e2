<?php

use PHPUnit\Framework\TestCase;
require_once( __DIR__.'/../models/Vegetable.php');

class VegetableTest extends TestCase
{
    public $vegetableTest;
    public function testAttributeObject()
    {
        $this->vegetableTest = new Vegetable(1,"Panais",30,"Justin Bridou","23-08-2019");
        $this->assertObjectHasAttribute("productorName", $this->vegetableTest);
        $this->assertObjectHasAttribute("expireAt", $this->vegetableTest);
        
    }
    
    public function testGetClass()
    {
        $this->vegetableTest = new Vegetable(1,"Panais",30,"Justin Bridou","23-08-2019");
        $this->vegetableTestNotFresh = new Vegetable(2,"Choux",10,"Jean-Jean Eustache","23-08-2017");
        $this->assertEquals(get_class($this->vegetableTest),"Vegetable");
        $this->assertTrue($this->vegetableTest->isFresh());
        $this->assertFalse($this->vegetableTestNotFresh->isFresh());
    }
}
