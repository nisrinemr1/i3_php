<h1>Chapitre 1 - exo 1</h1>
<?php 
    //déclarer nb1=5 et nb2=7
    $nb1 = "5";
    $nb2 = "7";

    //Afficher le contenu des variables
    echo "Avant nb1 valait : $nb1, et nb2 valait $nb2 <br>";

    //Echanger
    $temp = $nb1;
    $nb1 = $nb2;
    $nb2 = $temp;

    //Afficher le contenu des variables
    echo "Maintenant nb1 vaut : $nb1 et nb2 vaut : $nb2<br><br>";
    echo "I am happy :D";
?>