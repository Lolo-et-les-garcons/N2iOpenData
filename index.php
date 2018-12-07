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
    <title>DATA CITY</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body class="bg">
  <div class="container-fluid" >
    <div class="row">
      <div class="row" style="margin : 20px; text-align: center;">
        <h1>DATA CITY</h1>
      </div>

<div style="display: flex; flex-wrap: wrap">
    <div  style="width: 100%; display: flex; justify-content: center;">
        <form class="form-inline" action="Search.php" method="get">
          <input class="form-control mr-sm-2" type="text" placeholder="Ville" aria-label="Search" name="ville_param" >
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
        </form>
    </div>

    <div  style="width: 100%; display: flex; justify-content: center;">
        <div class="caseLigne1">
            <div class="headerCase">
                <p><i class="fas fa-info-circle"></i> Description</p>
            </div>
            <div class="corpsCase">
              <p> DATA CITY est une application web qui permet de consulter des données depuis plusieurs OPEN DATA, soit par des systèmes d'API, soit par des systèmes de parseur de données. DATA CITY permet à l'utilisateur de savoir par rapport à la ville de son choix, la météo, les risques de séismes, d'inondations, et industriels. Ces données permettront à l'utilisateur d'optimiser ses chances de survie lors de son aventure en France. Pour mettre en forme l'aspect graphique du site il a fallu également utiliser bootstrap un framework front-end.</p>
              </div>
        </div>
    </div></div></div></div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        <script src="scripts.js"></script>
</body>
<!--<footer><span class="copyright">Copyright © Your Website 2018</span></footer>-->
</html>
