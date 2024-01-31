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

    $product_1 = new Food('Royal Canin', 8.20, 'Mini Adult', $dog, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000","Crocchette/Secco", "Manzo");
    $product_2 = new Food('Almo Nature', 29.89, 'Holistic Maintenance Medium Large', $dog, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-dog-adult-medium-pollo-e-riso.jpg","Crocchette/Secco", "Pollo e riso");
    $product_3 = new Food('Almo Nature', 0.65, 'Cat Daily Lattina', $cat, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg","Umido", "Vitello");
    $product_4 = new Food('Guppy', 3.36, 'Mangime per pesci in fiocchi', $fish, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg","Fiocchi", "/");

    $product_5 = new Toy('Kong', 18.99, 'Kong Classic', $dog, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg","Cani di taglia medio/grande", "Plastica dura");
    $product_6 = new Toy('Trixie', 7.99, 'Topini di peluche', $cat, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg","Gatti di tutte le taglie", "Plastica/Polyestere");

    $product_7 = new Accessory('Wilma', 339, 'Voliera', $bird, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg","Uccelli di piccola taglia", "Legno");
    $product_8 = new Accessory('EasyCrystal', 3, 'Cartucce Filtranti per Filtro ', $fish, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000","Acquari per pesci", "Materiale naturale");


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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>OOP Shop</title>
</head>
<body>
</body>
</html>