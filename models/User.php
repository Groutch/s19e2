<?php
class User {
    private $id;
    private $email;
    private $createdAt;
    
    public function __construct($ident,$admail){
        $this->id = $ident;
        $this->email = $admail;
        $this->createdAt = date('d/m/Y');
    }
    
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;   
    }
    public function getDate(){
        return $this->createdAt;
    }
}