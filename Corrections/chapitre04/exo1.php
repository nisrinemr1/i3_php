<?php 
    $annee = $_POST["annee"];
    if($annee%4==0 && $annee % 100 != 0 || $annee % 400 == 0){
        // bissextile
        echo "L'année $annee est une année bissextile";
    }
    else {
        // n'est pas bissextile
        echo "L'année $annee n'est pas une année bissextile";
    }
?>
