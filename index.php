<?php
error_reporting(E_ERROR);
ini_set('display_errors', E_ERROR);
/**
 * author: Alexandre Fauchard, Adrian Guerry et Gaëtan Jagorel
 * Date: 2018-12-06
 * Time: 19:06
 */

require_once "./Parser.php";
//get_risque_ville("Lanester");
//get_risque_ville_type("Montpellier", "Séisme");



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
    <header>
        <div class="Titre"
        <div class="BarreRecherche"></div>
    </header>
    <div class="PageGenerale">
        <div class="Ligne">
            <div class="caseLigne1">
                <div class="headerCase">
                    <p><i class="fas fa-info-circle"></i> Infos</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
            <div class="caseLigne1">
                <div class="headerCase">
                    <p><i class="fas fa-list-ul"></i> Description</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
        </div>
        <div class="Ligne">
            <div class="caseLigne2">
                <div class="headerCase">
                    <p>Seismes</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
            <div class="caseLigne2">
                <div class="headerCase">
                    <p>Risques</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
            <div class="caseLigne2">
                <div class="headerCase">
                    <p>Meteo</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
        </div>
    </div>
</body>
<footer><span class="copyright">Copyright © Your Website 2018</span></footer>
</html>