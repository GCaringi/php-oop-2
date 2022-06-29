<?php

require_once __DIR__ . "/Product.php";

class PetToy extends Product{
    protected $type;
    protected $size;

    function __construct(string $_name, string $_bar_code, float $_price, int $_stock = 1, string $_type, string $_size){
        $this->type = $_type;
        $this->size = $_size;

        parent::__construct($_name, $_bar_code, $_price, $_stock = 1);
    }

    public function getType(){
        return $this->type;

    }

    public function getSize(){
        return $this->size;
    }
}

?>