<?php 
  /*  $date1=date("d/m/Y")."<br>";
    $heure=date("G:i:s"). "<br";//exo1

    $tab=["dimanche","lundi","mardi","mercredi","jeudi","vendredi","samedi"];//us :/
    $tabJour=date("w");
    $deux= "Nous somme le $tab[$tabJour] de la semaine<br>";

    $jour= "Nous somme le ".date("N")."er jour de la semaine"."<br>"; */
// 13/09/2021
echo date("d/m/Y") . "<br>";

// exo 1
// 16:14:18
echo date("H:i:s") . "<br>";

// exo 2
// Nous sommes lundi
$tabSemaine = ["dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi"];
    //déclarer les jours semaine au format tableau
$numJourSemaine = date("w");
    //ça c'est les jours au format numérique et le comparaitra avec le tableau
echo "Nous sommes $tabSemaine[$numJourSemaine] <br>";

// exo 3
// Nous sommes le 13 septembre 2021
$tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$numMois = date('n')-1;
$jour = date('d');
$annee = date('Y');
echo "Nous sommes le $jour $tabMois[$numMois] $annee<br>";

// exo 4
// Nous sommes le 1 jour de la semaine
$numSemaine = date('N');
echo "Nous sommes le $numSemaine jour de la semaine";

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