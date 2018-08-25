<!DOCTYPE html>
<html>

<head>
    <title>Valider la commande</title>
</head>

<body>
    <?php 
    $order = require_once(__DIR__.'/views/validateOrder.php');
    //on affiche donc le panier
    echo "<h1>Récapitulatif du panier de ".$order->getId()."</h1>";
    foreach ($order->getCart() as $line){
        echo $line->getName()." à ".$line->getPrice()."€<br>";
    }
    echo "Total : ".$order->getBill()."€<br>";
    ?>
</body>

</html>
