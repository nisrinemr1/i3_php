<<?php 
    // avec plusieurs RETURN
    // déclarer la fonction
    function recherche($table, $taille, $valeur)
    {
        for ($i=0; $i < $taille; $i++) { 
            if($table[$i] == $valeur){
            return $i;
            }
        }
    return -1;
}

function afficheTableau($table){
    $tr = "";
        for ($i=0; $i < count($table); $i++) { 
            $tr .= "<td>$table[$i]</td>";
        }
    return $tr;
}

// appeler la fonction
$tab = array(1,4,3,5,2);
$tableau= afficheTableau($tab);
$valeurRechercher = 4;
$position = recherche($tab, count($tab), $valeurRechercher)

// afficher la position (dans tab : position, sinon : -1)
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2b</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Exo2b</h1>
        <table>
        <tr>
        <?= $tableau; ?> 
        </tr>
        </table>
        <p>La valeur recherchée est en position : <?= $position; ?> </p>
    </body>
</html>