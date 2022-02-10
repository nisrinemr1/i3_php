<?php 
//initialiser tableau vide
    $tab = array (1,4,3,5,2);
    $plusGrand = $tab [0];
    $plusPetit = $tab [0];
    $table = "";
    $somme = 0;
    $moyenne = 0;

    for ($i=0; $i < count ($tab) ; $i++) { 
        //si le nombre dans le tableau est plus grand que $plusGrand(i est l'indice)
        if($tab[$i]>$plusGrand){
            //met à jour $plusGrand
            $plusGrand = $tab[$i];
        }
        if ($tab[$i]<$plusPetit) {
            $plusPetit = $tab[$i];
        }
        $somme = $somme+$tab[$i];
        $table .= "<td>$tab[$i]</td>";
        
    }
    $moyenne = $somme /count($tab);
    //on le met ici parce qu'on a pas besoin qu'il repete en mode boucle!

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse; 
            width: 100px;
            text-align:center;
        }
        td {
            border : 1px solid black;
    }
    </style>
</head>
<body>
    <table>
        <tr><?= $table ?></tr>
        <!-- boucle génerera ma tr -->
    </table>
    <p>Le plus grand est <?= $plusGrand; ?> </p>
    <p>Le plus petit est <?= $plusPetit; ?> </p>
    <p>Le total de la table est <?= $somme; ?> </p>
    <p>La moyenne de la table est <?= $moyenne; ?> </p>
    <!-- pas mettre dans la table! -->
    
</body>
</html>