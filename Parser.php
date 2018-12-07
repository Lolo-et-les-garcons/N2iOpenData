<?php
function get_risque_ville($ville)
{
  $fichier = 'risq_gaspar.csv';

  // The nested array to hold all the arrays
  $tableau_De_Donnees = [];
  // Open the file for reading
  if (($h = fopen("{$fichier}", "r")) !== FALSE)
  {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
    {
      //var_dump($data);
      $tableau_De_Donnees[] = $data;
      // Each individual array is being pushed into the nested array
      //$tableau_De_Donnees[] = $data;
    }

    // Close the file
    fclose($h);
  }
  $i=1;
  $i2 = 0;
  $array= [];
  $pieces= [];
  $incident_Par_Ville = [];
  foreach ($tableau_De_Donnees as $data ){
    $array[$i] = $tableau_De_Donnees[$i][0];
    $pieces[$i] = explode(";", $array[$i]);
    if($pieces[$i][1] == $ville)
    {
      $incident_Par_Ville[] = $pieces[$i];
      $i2++;
      //echo $pieces[$i][1]."<br>";
    }
    $i++;
  }
  $i = 0;

  echo $ville." : <br>";
  echo "Il y a ".$i2." risque à ".$ville."  <br><br>";
  foreach ($incident_Par_Ville as $data ){
    echo $incident_Par_Ville[$i][2] ."<br>";

    $i++;
  }
  // Display the code in a readable format
  echo "<pre>";
  echo "</pre>";
}

//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------

  function get_risque_ville_type($ville, $risque)
  {
    $fichier = 'risq_gaspar.csv';

    // The nested array to hold all the arrays
    $tableau_De_Donnees = [];
    // Open the file for reading
    if (($h = fopen("{$fichier}", "r")) !== FALSE)
    {
      // Each line in the file is converted into an individual array that we call $data
      // The items of the array are comma separated
      while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
      {
        //var_dump($data);
        $tableau_De_Donnees[] = $data;
        // Each individual array is being pushed into the nested array
        //$tableau_De_Donnees[] = $data;
      }

      // Close the file
      fclose($h);
    }
    $i=1;
    $i2 = 0;
    $array= [];
    $pieces= [];
    $incident_Par_Ville = [];
    $type_incident =[];
    foreach ($tableau_De_Donnees as $data ){
      $array[$i] = $tableau_De_Donnees[$i][0];
      $pieces[$i] = explode(";", $array[$i]);
      if($pieces[$i][1] == $ville)
      {
        $incident_Par_Ville[] = $pieces[$i];
        $type_incident[] = explode(" ",$pieces[$i][2]);
        //echo $pieces[$i][1]."<br>";
      }
      $i++;
    }
    $i = 0;

    echo $ville." : <br>";
    echo "Les risques relatifs aux ".$risque."  à ".$ville. " :" ."  <br><br>";
    foreach ($incident_Par_Ville as $data ){
      if($type_incident[$i][0] == $risque)
      {
        echo $incident_Par_Ville[$i][2] ."<br>";
        $i2++;
      }
      $i++;
    }

    echo "Il y a " .$i2 ." risque(s) relatifs aux " .$risque ." à " .$ville ." <br>";
    // Display the code in a readable format
    echo "<pre>";
    echo "</pre>";
    }

//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------------------------------------------------------------------
    function get_info_ville($ville)
    {
      $fichier = 'Appartenance-géographique.csv';

      // The nested array to hold all the arrays
      $tableau_De_Donnees = [];
      // Open the file for reading
      if (($h = fopen("{$fichier}", "r")) !== FALSE)
      {
        // Each line in the file is converted into an individual array that we call $data
        // The items of the array are comma separated
        while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
        {
          //var_dump($data);
          $tableau_De_Donnees[] = $data;
          // Each individual array is being pushed into the nested array
          //$tableau_De_Donnees[] = $data;
        }

        // Close the file
        fclose($h);
      }
      $i=2;
      $i2 = 0;
      $array= [];
      $pieces= [];
      $incident_Par_Ville = [];
      foreach ($tableau_De_Donnees as $data ){
        $array[$i] = $tableau_De_Donnees[$i][0];
        $pieces[$i] = explode(';"', $array[$i]);

        if($pieces[$i][1] == $ville.'"')
        {

          $incident_Par_Ville[] = $pieces[$i];
          $i2++;
          //echo $pieces[$i][1]."<br>";
        }
        $i++;
      }
      $i = 0;
      $habitants = [];
      foreach ($incident_Par_Ville as $data ){
        echo "Le département de ".$ville." est le : ".$incident_Par_Ville[$i][2] ."<br>";
        $habitants = explode(';', $incident_Par_Ville[$i][17]);
        echo "La population des ".$ville." est de : ".$habitants[2] . " habitants";

        $i++;
      }
      // Display the code in a readable format
      echo "<pre>";
      echo "</pre>";
    }

?>
