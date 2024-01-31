<?php 
    
    class Products {
        public $name;
        public $price;
        public $category;

        public function  __construct($_name, $_price) {
            $this->name = $_name;
            $this->price = $_price;
        }

        public function getInfoFood(){
            return "Nome: ".$this->name."<br>"."Prezzo: ".$this->price."€"."<br>"." Categoria: ".$this->category."<br>"." Cibo: ".$this->food;
        }

        public function getInfoToy(){
            return "Nome: ".$this->name."<br>"."Prezzo: ".$this->price."€"."<br>"." Categoria: ".$this->category."<br>"." Giocattoli: ".$this->toy;
        }

        public function getInfoHouse(){
            return "Nome: ".$this->name."<br>"."Prezzo: ".$this->price."€"."<br>"." Categoria: ".$this->category."<br>"." Casetta: ".$this->house;
        }
    }

    class Dog_1 extends Products{
        public $food;
        public function __construct($name, $price, $_food){
            parent::__construct($name, $price);
            $this->category = 'Cane';
            $this->food = $_food;
        }
    }

    class Dog_2 extends Products{
        public $toy;
        public function __construct($name, $price, $_toy){
            parent::__construct($name, $price);
            $this->category = 'Cane';
            $this->toy = $_toy;
        }
    }

    class Cat_1 extends Products{
        public $food;
        public function __construct($name, $price, $_food){
            parent::__construct($name, $price);
            $this->category = 'Gatto';
            $this->food = $_food;
        }
    }

    class Cat_2 extends Products{
        public $toy;
        public function __construct($name, $price, $_toy){
            parent::__construct($name, $price);
            $this->category = 'Gatto';
            $this->toy = $_toy;
        }
    }

    class Birds_1 extends Products{
        public $food;
        public function __construct($name, $price, $_food){
            parent::__construct($name, $price);
            $this->category = 'Uccelli';
            $this->food = $_food;
        }
    }

    class Birds_2 extends Products{
        public $house;
        public function __construct($name, $price, $_house){
            parent::__construct($name, $price);
            $this->category = 'Uccelli';
            $this->house = $_house;
        }
    }
    
    class Fishes_1 extends Products{
        public $food;
        public function __construct($name, $price, $_food){
            parent::__construct($name, $price);
            $this->category = 'Pesci';
            $this->food = $_food;
        }
    }

    class Fishes_2 extends Products{
        public $house;
        public function __construct($name, $price, $_house){
            parent::__construct($name, $price);
            $this->category = 'Pesci';
            $this->house = $_house;
        }
    }

    // Subclasses Foods
    $dog_1 = new Dog_1 ('Royal Canin Mini Adult', 8.20, 'Cibo per cani');
    $dog_2 = new Dog_1 ('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 29.89, 'Cibo per cani');
    $cat_1 = new Cat_1 ('Almo Nature Cat Daily Lattina', 0.65, 'Cibo per gatti');
    $fish_1 = new Fishes_1 ('Mangime per Pesci Guppy in Fiocchi', 3.36, 'Cibo per pesci');

    // Subclasses Toys
    $dog_3 = new Dog_2 ('Kong Classic', 18.99, 'Giocattolo per cani');
    $cat_2 = new Cat_2 ('Topini di peluche Trixie', 7.99, 'Giocattolo per gatti');

    // Subclasses Houses
    $bird_1 = new Birds_2 ('Voliera Wilma in Legno', 339, 'Voliera per uccelli');
    $fish_2 = new Fishes_2 ('Cartucce Filtranti per Filtro EasyCrystal', 9, 'Ampolla per pesci ');

    $products = [
            $food = [
                    $dog_1, 
                    $dog_2, 
                    $cat_1, 
                    $fish_1,
                    ],
            $toys = [
                    $dog_3,
                    $cat_2
                    ],
            $house = [
                    $bird_1,
                    $fish_2
                    ]
                ];

    foreach($food as $product){
        echo $product->getInfoFood()."<br><br>";
    }
    foreach($toys as $product){
        echo $product->getInfoToy()."<br><br>";
    }
    foreach($house as $product){
        echo $product->getInfoHouse()."<br><br>";
    }

?>