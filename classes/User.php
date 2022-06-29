<?php

require_once __DIR__ . "/CreditCard";

class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $discount = 0;
    protected $credit_card;

    function __construct(string $_name, string $_surname, string $_email, Credit $_credit_card , int $_discount = 0 )
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->credit_card = $_credit_card;
        $this->discount = $_discount;
    }

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getMail(){
        return $this->email;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getCredit(){
        return $this->credit_card;
    }

    public function setDiscont($new_discount){
        $this->discount = $new_discount;
    }

}
?>