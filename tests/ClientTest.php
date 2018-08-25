<?php

use PHPUnit\Framework\TestCase;
require_once( __DIR__.'/../models/Client.php');

class ClientTest extends TestCase
{
    public $clientTest;
    public function testAttributeObject()
    {
        $this->clientTest = new Client("Groutch","mail1@mail.com");
        $this->assertObjectHasAttribute("billAmount", $this->clientTest);
        $this->assertObjectHasAttribute("cart", $this->clientTest);
        
    }
    
    public function testGetClass()
    {
        $this->clientTest = new Client("Groutch","mail1@mail.com");
        $this->assertEquals(get_class($this->clientTest),"Client");
        $this->assertEquals(0,$this->clientTest->getBill());
        $this->assertEquals([],$this->clientTest->getCart());
    }
}