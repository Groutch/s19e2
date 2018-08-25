<!DOCTYPE html>
<html>

<head>
    <title>This is a test</title>
</head>

<body>
    <?php
    //liste des produits
    $products = require_once(__DIR__.'/../data/products.php');
    //liste des clients
    $users = require_once(__DIR__.'/../data/users.php');
    ?>
    <h1>Le Super Shopping !</h1>
    <form id="shopping" method="post" action="validateOrder.php">
        <label for="sel_usr">Selectionnez un client</label>
        <select name="sel_usr" required>
            <?php
            foreach ($users as $idu => $usr){
                echo '<option value="'.$idu.'">'.$usr->getId().'</option>';
            }
            ?>
        </select>
        <hr>
        <label for="sel_prod_1">Selectionnez jusqu'à 3 produits</label><br>
        <select name="sel_prod_1">
            <option value="-1" selected disabled="disabled">---</option>
            <?php
            foreach ($products as $idp => $prod){
                echo '<option value="'.$idp.'">'.$prod->getName().' | '.$prod->getPrice().' €</option>';
            }
            ?>
        </select>
        <br>
        <select name="sel_prod_2">
            <option value="-1" selected disabled="disabled">---</option>
            <?php
            foreach ($products as $idp => $prod){
                echo '<option value="'.$idp.'">'.$prod->getName().' | '.$prod->getPrice().' €</option>';
            }
            ?>
        </select>
        <br>
        <select name="sel_prod_3">
            <option value="-1" selected disabled="disabled">---</option>
            <?php
            foreach ($products as $idp => $prod){
                echo '<option value="'.$idp.'">'.$prod->getName().' | '.$prod->getPrice().' €</option>';
            }
            ?>
        </select>
        <br><input type="submit">
    </form>
</body>

</html>