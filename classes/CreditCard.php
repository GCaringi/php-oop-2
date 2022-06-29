<?php

require_once __DIR__ . "/User.php";

class Credit{
    protected $number;
    protected $expire_date;
    protected $brand;
    protected $owner;
    protected $cvc;

    function __construct(int $_number, int $_expire_date, string $_brand, User $_owner, int $_cvc){
        $this->number = $_number;
        $this->expire_date = $_expire_date;
        $this->brand = $_brand;
        $this->owner = $_owner;
        $this->cvc = $_cvc;
    }

    public function getNumber(){
        return $this->number;
    }

    public function getExpire(){
        return $this->expire_date;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function getOwner(){
        return $this->owner;
    }

    public function getCvc(){
        return $this->cvc;
    }

}



?>