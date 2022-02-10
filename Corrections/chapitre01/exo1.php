<h1>Chapitre 1 - Exo 1</h1>
<?php 
    // déclarer nb1 = 5 et nb2 = 7
    $nb1 = "5";
    $nb2 = "7";
    // afficher le contenu des variables
    echo "Avant nb1 = $nb1, nb2 = $nb2<br>";
    // echanger
    $temp = $nb1;
    $nb1 = $nb2;
    $nb2 = $temp;
    // afficher le contenu des variables
    echo "Après nb1 = $nb1, nb2 = $nb2";

?>