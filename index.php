<?php 
    
    class Products {
        public $name;
        public $price;
        public $description;
        public $category;
        public $image;

        function  __construct($_name, $_price, $_description, $_category, $_image) {
            $this->name = $_name;
            $this->price = $_price;
            $this->description = $_description;
            $this->category = $_category;
            $this->image = $_image;
        }
    }

    class Category {
        public $name;

        function __construct($_name){
            $this -> name = $_name;
        }
    }

    class Food extends Products {
        public $deadline;
        public $calories;

        function __construct($_name, $_price, $_description, $_category, $_image, $_deadline, $_calories){
            parent::__construct($_name, $_price, $_description, $_category, $_image);
            $this->deadline = $_deadline;
            $this->calories = $_calories;
        }
    }

    class Toy extends Products {
        public $madeFor;
        public $madeOf;

        function __construct($_name, $_price, $_description, $_category, $_image, $_madeFor, $_madeOf){
            parent::__construct($_name, $_price, $_description, $_category, $_image);
            $this->madeFor = $_madeFor;
            $this->madeOf = $_madeOf;
        }

    }

    class Accessory extends Products {
        public $madeFor;
        public $madeOf;

        function __construct($_name, $_price, $_description, $_category, $_image, $_madeFor, $_madeOf){
            parent::__construct($_name, $_price, $_description, $_category, $_image);
            $this->madeFor = $_madeFor;
            $this->madeOf = $_madeOf;
        }
    }

    $dog = new Category("Cane");
    $cat = new Category("Gatto");
    $fish = new Category("Pesci");
    $bird = new Category("Uccelli");




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