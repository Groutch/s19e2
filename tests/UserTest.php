<?php

use PHPUnit\Framework\TestCase;
require_once( __DIR__.'/../models/User.php');

class UserTest extends TestCase
{
    public $userTest;
    public function testAttributeObject()
    {
        $this->userTest = new User("Groutch","mail1@mail.com");
        $this->assertObjectHasAttribute("id", $this->userTest);
        $this->assertObjectHasAttribute("email", $this->userTest);
        $this->assertObjectHasAttribute("createdAt", $this->userTest);
        
    }
    
    public function testGetClass()
    {
        $this->userTest = new User("Groutch","mail1@mail.com");
        $this->assertEquals(get_class($this->userTest),"User");
        $this->assertEquals("Groutch",$this->userTest->getId());
        $this->assertEquals("mail1@mail.com",$this->userTest->getEmail());
        $this->assertEquals(date('d/m/Y'),$this->userTest->getDate());
    }
}