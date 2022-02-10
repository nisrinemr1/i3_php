<?php 
    $msgError = "";
    if(isset($_POST["nom"])){
        if(trim($_POST["nom"])!=  ""){
            // enregistrer dans une variable de session
            $_SESSION["nom"] = trim($_POST["nom"]);
            // rediriger vers la page d'accueil
            header("Location:?section=accueil");
        }
        else {
            // message d'erreur
            $msgError = "<p class='red'>Veuillez entrer un nom valide</p>";
        }
    }


    include("views/page/connexion.php");
?>