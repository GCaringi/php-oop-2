<?php

require_once __DIR__ . "/PetFood.php";

class PetFood extends Product{
    protected $type;
    protected $expire_date;


    function __construct(string $_name, string $_bar_code, float $_price, int $_stock = 1, string $_expire_date, string $_type){
        $this->type = $_type;
        $this->expire_date = $_expire_date;

        parent::__construct($_name, $_bar_code, $_price, $_stock = 1);
    }

    public function get_expire_date(){
        return $this->expire_date;
    }
}


?>
