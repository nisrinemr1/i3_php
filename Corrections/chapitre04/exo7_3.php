<?php 
    $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $tabJoursMois = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $table = "";
    $tableJours="";

    for($i=0; $i < count($tabMois); $i++){
        $table .= "<tr><td>$tabMois[$i]</td><td>$tabJoursMois[$i]</td></tr>";
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
        table{
            border-collapse: collapse; 
            width: 200px;
            text-align:center;
            align:center ;
        }
        td {
            border : 1px solid black;
        
    }
   
    </style>
</head>
<body>
    <table>
        <tr><th>Mois</th><th>Nombre de jours</th></tr>
        <?= $table ?>
    </table>
</body>
</html>