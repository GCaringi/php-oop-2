<?php

class Product{
    protected $name;
    protected $bar_code;
    protected $price;
    protected $stock;

    function __construct(string $_name, string $_bar_code, float $_price, int $_stock = 1){
            $this->name = $_name;
            $this->bar_code = $_bar_code;
            $this->price = $_price;
            $this->stock = $_stock;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_bar_code(){
        return $this->bar_code;
    }

    public function get_price(){
        return $this->price;
    }

    public function get_quantity(){
        return $this->stock;
    }

    public function set_bar_code(string $_new_bar_code){
        $this->bar_code = $_new_bar_code;
    }

    public function set_price(float $_new_price){
        $this->price = $_new_price;
    }
}



?>
