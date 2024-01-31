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
        public $food;
        public $toy;

        public function __construct($name, $price, $_food, $_toy){
            parent::__construct($name, $price);
            $this->category = 'Cane';
            $this->food = $_food;
            $this->toy = $_toy;
        }
    }

    class Cat extends Products{
        public $food;
        public $toy;
        public function __construct($name, $price, $_food, $_toy){
            parent::__construct($name, $price);
            $this->category = 'Gatto';
            $this->food = $_food;
            $this->toy = $_toy;
        }
    }

    class Birds extends Products{
        public $food;
        public $house;
        public function __construct($name, $price, $_food, $_house){
            parent::__construct($name, $price);
            $this->category = 'Uccelli';
            $this->food = $_food;
            $this->house = $_house;
        }
    }
    
    class Fishes extends Products{
        public $food;
        public $house;
        public function __construct($name, $price, $_food, $_house){
            parent::__construct($name, $price);
            $this->category = 'Pesci';
            $this->food = $_food;
            $this->house = $_house;
        }
    }

    // Subclasses Food 
    $dog_1 = new Dog ('Royal Canin Mini Adult', 8.20, 'Cibo per cani');
    $dog_2 = new Dog ('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 29.89, 'Cibo per cani');
    $cat_1 = new Cat ('Almo Nature Cat Daily Lattina', 0.65, 'Cibo per gatti');
    $fish_1 = new Fishes ('Mangime per Pesci Guppy in Fiocchi', 3.36, 'Cibo per pesci');

    // Subclasses Toys
    $dog_3 = new Dog ('Kong Classic', 18.99, 'Giocattolo per cani');
    $cat_2 = new Cat ('Topini di peluche Trixie', 7.99, 'Giocattolo per gatti');

    // Subclasses House

    $bird_1 = new Birds ('Voliera Wilma in Legno', 339, 'Voliera per uccelli');
    $fish_2 = new Fishes ('Cartucce Filtranti per Filtro EasyCrystal', 9, 'Ampolla per pesci ');

?>