<?php 
    // ce ficher c'est pour dire "quand on va appuyer sur envoyer, tu vas envoyer au ficher form.php. donc dans le doc php on va mettre dans "action" form.php
    //derniere chose à faire c'est la méthode d'envoie des données. sauf que pour le moment, l'age s'affiche dans l'url quand on appuie sur envoyer donc: il faut ajouter: method="POST" donc il faudra le mettre dedans obliger comme ça c'est cacher. 

    // on va recuperer l'âge dans le formulaire. On va venir stocker ça dans une variable.

    $age = $_POST["age"];
    //afficher la phrase:
    echo "Vous avez $age ans";
?>