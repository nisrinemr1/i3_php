<?php

$message = "";

for($multiplicateur = 1;$multiplicateur <= 10;$multiplicateur++){
$resultat = 2 * $multiplicateur;
$message .= "2 x $multiplicateur = $resultat<br>";
for($nb2 = 1;$nb2 < 11;$nb2++){

    // stocke le résultat du calcul
    $resultat = $nb1 * $nb2;
    // stocke et génère
    // 1 x 2 = 2
    $table .= "$nb1 x $nb2 = $resultat<br>";
    // incrémente le multiplicateur
    }

    $table .= "</td>";
    if($nb1 == 5){
    $table .= "</tr><tr>";
    }
    // incrémente la table
}

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