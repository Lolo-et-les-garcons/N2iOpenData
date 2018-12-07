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
    <div class="header">
        <div class="Titre"><p>Tours <br> 37000</p></div>
        <div class="BarreRecherche">
            <input type="text" class="ChampsRecherche" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <button class="BoutonCherche" type="button">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
    </div>
    <div>
    <!--<span>Ville</span> <input id="tfCity" type ="text"></input>
    <button type="button" onclick="requestAPI()">Requete</button>
    <h1 id="temp"></h1>-->
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
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
        </div>
        <div class="Ligne">
            <div class="caseLigne2">
                <div class="headerCase">
                    <p><i class="fab fa-think-peaks"></i> Seismes</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
            <div class="caseLigne2">
                <div class="headerCase">
                    <p><i class="fas fa-water"></i> Innondations</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
            <div class="caseLigne2">
                <div class="headerCase">
                    <p><i class="fas fa-times"></i> Risques</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
            <div class="caseLigne2">
                <div class="headerCase">
                    <p><i class="fas fa-cloud"></i> Meteo</p>
                </div>
                <div class="corpsCase">
                    <p>Infoszadakzdgizdazdazaazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz <br>dazdazdazdazdazdazdazdazdaz</p>
                </div>
            </div>
        </div>
    </div>

        <script src="scripts.js"></script>
</body>
<!--<footer><span class="copyright">Copyright © Your Website 2018</span></footer>-->
</html>