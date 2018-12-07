<?php
error_reporting(E_ERROR);
ini_set('display_errors', E_ERROR);
/**
 * author: Alexandre Fauchard, Adrian Guerry et Gaëtan Jagorel
 * Date: 2018-12-06
 * Time: 19:06
 */

require_once "./Parser.php";
//$ville_get = $_GET["ville_param"];
 //$ville_get= "Tours";
//get_risque_ville("Lanester");
//get_risque_ville_type("Montpellier", "Séisme");
$villeTest = $_GET['ville_param'];
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <script src="scripts.js"></script>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body class="bg" onload="requestAPI()">
      <nav class="navbar custom_nav" >
        <a class="navbar-brand" href="index.php">DATA CITY</a>
        <form class="form-inline" action="Search.php" method="get" style="margin-right: 8%; margin-left : 1%;">
          <input class="form-control mr-sm-2" type="text" placeholder="Ville" aria-label="Search" name="ville_param" >
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
        </form>
      </nav>

    <!--<span>Ville</span> <input id="tfCity" type ="text"></input>
    <button type="button" onclick="requestAPI()">Requete</button>
    <h1 id="temp"></h1>-->



    <div class="container-fluid" >
      <div class="row">


        <div class="col-md-4">
          <div class="row">
            <div class="caseLigne2">
                <div class="headerCase">
                    <p>Meteo</p>
                </div>
                <div class="corpsCase">
                  <p id=city ></p>
                  <p id=weather style="font-size : 20px;"></p>
                  <p id=temp style="font-size : 20px;"></p>
                  <p id=wind style="font-size : 20px;"></p>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="caseLigne2">
                <div class="headerCase">
                    <p>Seismes</p>
                </div>
                <div class="corpsCase">
                  <p>  <?php get_risque_ville_type($villeTest, "Séisme"); ?> </p>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="caseLigne1">
            <div class="Ville ">
                  <p> <?php echo $villeTest; ?> </p>
            </div>
            <p><?php get_info_ville($villeTest); ?></p>

              </div>
        </div>




        <div class="col-md-4">
          <div class="row">
            <div class="caseLigne2">
                <div class="headerCase">
                    <p>Risques Industriels</p>
                </div>
                <div class="corpsCase">
                <p>  <?php get_risque_ville_type($villeTest, "Risque"); ?> </p>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="caseLigne2">
                <div class="headerCase">
                    <p>Inondations</p>
                </div>
                <div class="corpsCase">
                <p> <?php get_risque_ville_type($villeTest, "Inondation"); ?> </p>
                </div>
            </div>
          </div>
        </div>

</div>

    </div>

</body>
<!--<footer><span class="copyright">Copyright © Your Website 2018</span></footer>-->
</html>
