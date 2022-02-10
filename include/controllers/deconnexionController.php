<?php 
    // vider les variables de session
    unset($_SESSION["nom"]);
    // détruire la session
    session_destroy();
    // revenir sur la page de connexion
    header("Location:index.php?section=connexion");
?>