<?php

require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/food.php";
require_once __DIR__ . "/classes/category.php";
require_once __DIR__ . "/classes/game.php";

$cat = new category("Gatto", "<i class=\"fa-solid fa-cat\"></i>");
$dog = new category("Cane", "<i class=\"fa-solid fa-dog\"></i>");

$collare = new product("Collare per gatti", "https://egress.storeden.net/gallery/618a7e265fb8e0d4da7a17d0", 6, $cat);
$croccantini = new food("Croccantini", "https://www.petsplanet.it/694-large_default/orange-for-dog-crocchette-per-tutti-i-cani-20-kg.jpg", 12,  $dog, "21/01/2023", "100", "pollo");
$astagioco = new game("Asta da gioco", "https://www.dmail.it/on/demandware.static/-/Sites-dret-catalog/default/dw2e740ba3/images_dmail/large/509459l_1.jpg", 50, $cat);
$astagioco->setMaterial("Plastica");

$products = [
    $collare,
    $croccantini,
    $astagioco,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</head>
<body>
    <div class="contaner mx-5">
        <h1>Shop per Animali</h1>
        
            <div class="row">
                <?php foreach($products as $product) { ?>
                <div class="card mx-2" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $product->getImage(); ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->getName(); ?></h5>
                        <div>
                            <?php echo $product->getCategory()->getIcon(); ?>
                        </div>

                        <?php if( method_exists($product, 'getExpiration') ) { ?>
                        <p class="card-text">Scadenza: <?php echo $product->getExpiration(); ?></p>
                        <?php } ?>

                        <?php if( method_exists($product, 'getAshes') ) { ?>
                        <p class="card-text">Ceneri: <?php echo $product->getAshes(); ?> g</p>
                        <?php } ?>

                        <?php if( method_exists($product, 'getMeat') ) { ?>
                        <p class="card-text">Tipo di carne: <?php echo $product->getMeat(); ?></p>
                        <?php } ?>

                        
                        <?php if( method_exists($product, 'getMaterial') ) { ?>
                        <p class="card-text">Materiali: <?php echo $product->getMaterial(); ?></p>
                        <?php } ?>

                        <p class="card-text">Prezzo <?php echo $product->getName(); ?>: <?php echo $product->getPrice(); ?>€</p>
                        <a href="#" class="btn btn-primary">Compra</a>
                    </div>
                </div>
                <?php } ?>
            </div>
    </div>
</body>
</html>