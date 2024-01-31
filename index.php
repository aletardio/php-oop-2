<?php 
    
    class Products {
        public $name;
        public $price;
        public $category;

        public function  __construct($_name,  $_price, $_category) {
            $this->name = $_name;
            $this->price = $_price;
            $this->category = $_category;
        }

        public function getInfo(){
            return "Nome: $this->name, Prezzo: $this->price,  Categoria: $this->category";
        }
    }

    class Dog extends Products{
        public function __construct($name, $price){
            parent::__construct($name, $price, 'Cane');
        }
    }


?>