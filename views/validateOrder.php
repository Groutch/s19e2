    <?php
    //liste des produits
    $products = require_once(__DIR__.'/../data/products.php');
    //liste des clients
    $users = require_once(__DIR__.'/../data/users.php');
    $idusr = $_POST['sel_usr'];
    //on buy chaque objet s'il ont été selectionnés !
    if(isset($_POST["sel_prod_1"])){
        $idp1 = $_POST["sel_prod_1"];
        $users[$idusr]->buy($products[$idp1]);
    }
    if(isset($_POST["sel_prod_2"])){
        $idp2 = $_POST["sel_prod_2"];
        $users[$idusr]->buy($products[$idp2]);
    }
    if(isset($_POST["sel_prod_3"])){
        $idp3 = $_POST["sel_prod_3"];
        $users[$idusr]->buy($products[$idp3]);
    }
    return $users[$idusr];
    
    ?>
