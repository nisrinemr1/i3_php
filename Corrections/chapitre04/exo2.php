<?php 
    $message = "";
    if(isset($_POST["pret"], $_POST["panierVide"]))
    {
        // var_dump($_POST);
        $pret = ($_POST["pret"] == "true")? true : false;
        $panierVide = ($_POST["panierVide"] == "true")? true : false;
        // opérateur ternaire
        // $variable = (condition) ? siVrai : siFaux;

        // var_dump($pret);
        // var_dump($panierVide);

        if($pret && !$panierVide){
            $message = "Lancer la balle";
        }
        else {
            $message = "Ne pas lancer la balle<ul>";
            if(!$pret){
                $message .= "<li>Car vous n'êtes pas pret</li>";
            }
            if($panierVide){
                $message .= "<li>Car le panier est vide</li>";
            }
            $message .= "</ul>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
    <h2>Exo2</h2>
    <form action="#" method="post">
        <p>Etes-vous prêt ?</p>
        <input type="radio" name="pret" id="pretOui" value="true">
        <label for="pretOui">Oui</label>
        <input type="radio" name="pret" id="pretNon" value="false">
        <label for="pretNon">Non</label>

        <p>Le panier est-il vide ?</p>
        <input type="radio" name="panierVide" id="panierVideOui" value="true">
        <label for="panierVideOui">Oui</label>
        <input type="radio" name="panierVide" id="panierVideNon" value="false">
        <label for="panierVideNon">Non</label>
        <br>
        <input type="submit" value="Tester">
    </form>
    <?= $message; ?> 
</body>
</html>