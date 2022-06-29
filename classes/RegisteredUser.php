<?php

require_once __DIR__ . "/User.php";

class RegisteredUser extends User{
    protected $discount;

    function __construct(string $_name, string $_surname, string $_email, Credit $_credit_card, $_discount = 20){
        parent::__construct($_name, $_surname, $_email, $_credit_card , $_discount = 20 );

    }
}

?>