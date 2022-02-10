<?php 
/*     $table = "";
    // (le numéro de la table) 
    $nb1 = 1;
    // tant que nb1 (le numéro de la table) < 11
    
      while($nb1 < 11){
    // le texte 
        $table .= "<td>La table de $nb1 <br>";
        // le multiplicateur
        $nb2 = 1;

        while($nb2<11){
        // stocke le résultat du calcul
            $resultat = $nb1 * $nb2;
            // stocke et génère 
            $table .= "$nb1 x $nb2 = $resultat <br>";
            // incrémente le multiplicateur 
            $nb2++;
        }
        $table .="</td>";
        if ($nb1 == 5){
            $table .= "</tr><tr>";
        }
        $nb1++;
        // incrémente la table
    } */
$table = "";
// (le numéro de la table)
$nb1 = 1;
// tant que nb1 (le numéro de la table) < 11
do {
// le texte
    $table .= "<td>La table de $nb1<br>";
    // le multiplicateur
    $nb2 = 1;
    do {
    // stocke le résultat du calcul
    $resultat = $nb1 * $nb2;
    // stocke et génère
    // 1 x 2 = 2
    $table .= "$nb1 x $nb2 = $resultat<br>";
    // incrémente le multiplicateur
    $nb2++;
    } while($nb2 < 11);
    $table .= "</td>";
    if($nb1 == 5){
    $table .= "</tr><tr>";
    }
    // incrémente la table
    $nb1++;
} while($nb1 < 11);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table {
    border : 1px solid black;
    }
    
    td {
    border : 1px solid red;
    }
    </style>
</head>
<body>
    <h1>Exo 2 avec table </h1>
<table>
    <tr> 
    <?= $table ?>
    </tr>
</table>
</body>
</html>