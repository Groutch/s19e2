<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <?php
    //liste des produits
    $products = require_once(__DIR__.'/data/products.php');
    //liste des clients
    $users = require(__DIR__.'/data/users.php');
    echo "premier utilisateur achète un légume <br>";
    $users[0]->buy($products[0]);
    echo "second utilisateur achète un légume et un vêtement <br>";
    $users[1]->buy($products[1]);
    $users[1]->buy($products[2]);
    
    echo "Panier de l'utilsateur ".$users[0]->getId()." : <br>";
    foreach ($users[0]->getCart() as $line){
        echo $line->getName()." à ".$line->getPrice()."€<br>";
    }
    echo "Total : ".$users[0]->getBill()."€<br>";
    
    echo "Panier de l'utilsateur ".$users[1]->getId()." : <br>";
    foreach ($users[1]->getCart() as $line){
        echo $line->getName()." à ".$line->getPrice()."€<br>";
    }
    echo "Total : ".$users[1]->getBill()."€<br>";
    
    
    ?>
</body>

</html>
