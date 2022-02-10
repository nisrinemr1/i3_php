<?php 
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    //pour collecter les données. 
    echo "Votre message à bien été envoyé! Merci $prenom $nom <br>";
    //mettre le br dans les guillemets.
    echo "Votre message à bien été envoyé! Merci " . $prenom . " " . $nom;
    //Pour utiliser la concaténation. Qui est meilleur pour la visibilité
?>