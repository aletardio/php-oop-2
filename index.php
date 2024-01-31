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

    $product_1 = new Food('Royal Canin Mini Adult', 8.20, 'Manzo', $dog, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000");
    $product_2 = new Food('Almo Nature Holistic Maintenance Medium Large', 29.89, 'Tonno e Riso', $dog, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-dog-adult-medium-pollo-e-riso.jpg");
    $product_3 = new Food('Almo Nature Cat Daily Lattina', 0.65, 'Vitello', $cat, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg");
    $product_4 = new Food('Mangime per Pesci Guppy in Fiocchi', 3.36, 'Fiochhi', $fish, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg");

    $product_5 = new Toy('Kong Classic', 18.99, 'Plastica Dura', $dog, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg");
    $product_6 = new Toy('Topini di peluche Trixie', 7.99, 'Plastica/Poliestere', $cat, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg");

    $product_7 = new Accessory('Voliera Wilma', 339, 'Legno', $bird, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg");
    $product_8 = new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 3, 'Materiale Naturale', $fish, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000");


    $products = [
                    $product_1, 
                    $product_2, 
                    $product_3, 
                    $product_4, 
                    $product_5, 
                    $product_6, 
                    $product_7, 
                    $product_8
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