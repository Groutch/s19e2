<?php
require_once(__DIR__.'/../models/Vegetable.php');
require_once(__DIR__.'/../models/Cloth.php');
$legume1 = new Vegetable(1,"Carotte fraiche",3,"Jean-Mi Cheng", "21-08-2018");
$legume2 = new Vegetable(2,"Poireau pas frais",2,"Jean-Mi Cheng", "10-08-2018");
$vetement1 = new Cloth(3,"T-shirt rouge",20,"Petit Bateau");
$vetement2 = new Cloth(4,"Jupe Verte",30,"H&M");
$vetement3 = new Cloth(5,"Chaussettes grises",10,"Oui-Oui");
return [$legume1,$legume2,$vetement1,$vetement2,$vetement3];
//return [$legume1,$legume2];
?>