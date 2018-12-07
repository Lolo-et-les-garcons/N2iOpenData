<?php

/**
 * author: Alexandre Fauchard, Adrian Guerry et Gaëtan Jagorel
 * Date: 2018-12-06
 * Time: 19:06
 */

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
</head>
<body>
<div style="display: flex; flex-wrap: wrap">
    <div  style="width: 100%; display: flex; justify-content: center;">
        <div class="BarreRecherche">
            <input type="text" class="ChampsRecherche" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <button class="BoutonCherche" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <div  style="width: 100%; display: flex; justify-content: center;">
        <div class="caseLigne1">
            <div class="headerCase">
                <p><i class="fas fa-info-circle"></i> Description</p>
            </div>
            <div class="corpsCase">
                <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
            </div>
        </div>
    </div>
    <script src="scripts.js"></script>
</body>
<!--<footer><span class="copyright">Copyright © Your Website 2018</span></footer>-->
</html>