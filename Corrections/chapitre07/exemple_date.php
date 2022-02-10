<?php 
   $date1=date("d/m/Y")."<br>";
    $heure=date("G:i:s"). "<br";//exo1

    $tab=["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];//us :/
    $tabJour=date("w");
    $deux= "Nous somme le $tab[$tabJour] de la semaine<br>";

    $jour= "Nous somme le ".date("N")."er jour de la semaine"."<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?= $date1 ?> </p>
    <p><?= $heure ?></p>
    <p><?= $deux ?></p>
    <p><?= $jour ?> </p>
</body>
</html>