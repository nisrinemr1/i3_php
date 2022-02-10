<?php 
    include("fonctions_love.php");
    $tab = array(1,4,3,5,2);
    $tableau = afficheTableau($tab);

    $reponse = "";

    if(isset($_POST["choix"])){
        switch ($_POST["choix"]) {
            case 'min':
                $reponse = "Le plus petit est " . min($tab);
                break;
            case 'max':
                $reponse = "Le plus grand est " . max($tab);
                break;
            case 'somme':
                $reponse = "La somme est " . array_sum($tab);
                break;
            case 'moyenne':
                $reponse = "La moyenne est " . (array_sum($tab)/count($tab));
                break;
            default:
                $reponse = "Erreur";
                break;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Projet 1</h1>
    <table>
        <tr>
            <?= $tableau; ?> 
        </tr>
    </table>

    <form action="#" method="post">
        <select name="choix" id="choix">
            <option value="min">Plus petit</option>
            <option value="max">Plus grand</option>
            <option value="somme">Somme</option>
            <option value="moyenne">Moyenne</option>
        </select>
        <input type="submit" value="Rechercher">
    </form>
    <p><?= $reponse; ?> </p>
</body>
</html>