<?php 
    $message = "";
    $stockEau = 0;
    $stockCoca = 2;

    $selectedEau = "";
    $selectedCoca = "";

    if(isset($_POST["choix"])){
        $choix = $_POST["choix"];

        switch ($choix) {
            case '1':
                $selectedEau = "selected";
                if ($stockEau > 0) {
                    $message = "<p>Voici votre eau</p>";
                    $stockEau--;
                }
                else {
                    $message = "<p>Il n'y a plus d'eau</p>";
                }
                break;
            case '2':
                $selectedCoca = "selected";
                if ($stockCoca > 0) {
                    $message = "<p>Voici votre coca</p>";
                    $stockCoca--;
                }
                else {
                    $message = "<p>Il n'y a plus de coca</p>";
                }
                break;
            
            default:
                $message = "<p class=red>Erreur : choix inconnu</p>";
                break;
        }
        $message .= "<p>Il reste $stockEau de eau et $stockCoca de coca</p>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
    <style>
        .red {
            color:red;
        }
    </style>
</head>
<body>
    <h1>Exo3</h1>
    <form action="#" method="post">
        <label for="choix">Choisissez votre boisson : </label>
        <select name="choix" id="choix">
            <option value="1" <?= $selectedEau; ?> >Eau</option>
            <option value="2" <?= $selectedCoca; ?> >Coca</option>
        </select>
        <input type="submit" value="Commander">
    </form>
    <?= $message; ?> 
</body>
</html>