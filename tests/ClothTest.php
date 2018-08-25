<?php

use PHPUnit\Framework\TestCase;
require_once( __DIR__.'/../models/Cloth.php');

class ClothTest extends TestCase
{
    public $clothTest;
    public function testAttributeObject()
    {
        $this->clothTest = new Cloth(1,"truc",30,"Mercedes");
        $this->assertObjectHasAttribute("brand", $this->clothTest);
    }
    
    public function testGetClass()
    {
        $this->clothTest = new Cloth(1,"truc",30,"Mercedes");
        $this->assertEquals(get_class($this->clothTest),"Cloth");
        $this->assertEquals("Mercedes",$this->clothTest->getBrand());
    }
}
