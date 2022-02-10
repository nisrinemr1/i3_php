<?php 
    //vider les variables de session 
    unset($_SESSION["nom"]);
    //détruire la session
    session_destroy();
    //revenur sur la page de connexion 
    header("Location:index.php?section=connexion");
?>