<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <style>
        table,td {
            border: 1px solid #333;
        }
    </style>
    <?php
    $products = require_once(__DIR__.'/../data/products.php');
    echo "<table>";
    echo "<tr>";
    echo "<td>Id</td>";
    echo "<td>Nom</td>";
    echo "<td>Prix</td>";
    echo "<td>Misc</td>";
    echo "</tr>";
    foreach($products as $prod){
        echo "<tr>";
        echo "<td>".$prod->getId()."</td>";
        echo "<td>".$prod->getName()."</td>";
        echo "<td>".$prod->getPrice()."</td>";
        if(property_exists($prod, 'expireAt')){
            if($prod->isFresh()){
                echo "<td>C'est frais : ";
            }else{
                echo "<td>C'est pas frais : ";
            }
            echo $prod->getExpireAt()."</td>";
        }else{
            echo "<td>".$prod->getBrand()."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>