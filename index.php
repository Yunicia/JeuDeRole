<?php
include "vendor/autoload.php";

use app\armes\Baton;
use app\armes\EpeeUneMain;
use app\armures\Cape;
use app\armures\PlateArmor;
use app\factories\PersonnagesFactory;
use app\personnages\Defenseur;
use \app\personnages\Personnage;
use \app\personnages\Soigneur;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Test</h1>
    <div class="flexiBox">
        <div class="flexiBox">
            <h2>Groupe 1</h2>
            <?php
            $barbare1 = PersonnagesFactory::creerBarbare();
            $defenseur1 = PersonnagesFactory::creerDefenseur();
            $soigneur1 = PersonnagesFactory::creerSoigneur();
            $sorcier1 = PersonnagesFactory::creerSorcier();

            echo $barbare1->afficheCartePersonnage();
            echo $defenseur1->afficheCartePersonnage();
            echo $soigneur1->afficheCartePersonnage();
            echo $sorcier1->afficheCartePersonnage();
            ?>
        </div>
        <div class="flexiBox">
            <h2>Groupe 2</h2>
            <?php
            /*$barbare2 = PersonnagesFactory::creerBarbare();
            $defenseur2 = PersonnagesFactory::creerDefenseur();
            $soigneur2 = PersonnagesFactory::creerSoigneur();
            $sorcier2 = PersonnagesFactory::creerSorcier();

            echo $barbare2->afficheCartePersonnage();
            echo $defenseur2->afficheCartePersonnage();
            echo $soigneur2->afficheCartePersonnage();
            echo $sorcier2->afficheCartePersonnage();*/
            ?>
        </div>
    </div>
</body>
</html>