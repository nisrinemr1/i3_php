<?php
$tab = array(4,1,3,5,2);
$tableAvant = "";

$function afficheTableau($table){
    $tr = "";
    for ($i=0; $i < count($tab); $i++) {
    $tableAvant .= "<td>$tab[$i]</td>";
    }
    return $tr;
}

//tri à bulle!
function triABulle($table){
$tableApres = "";
$compt = 0;
    for ($i=0; $i < count($tab)-1; $i++) {
        for ($j=$i+1; $j < count($tab); $j++) {
            if($tab[$i] > $tab[$j]){
            // échanger
            $temp = $tab[$i];
            $tab[$i] = $tab[$j];
            $tab[$j] = $temp;
            $compt++;
            }
        }
    }
    var_dump($compt);
    for ($i=0; $i < count($tab); $i++) {
        $tableApres .= "<td>$tab[$i]</td>";
    }
    return $tabApres;

    
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Exo12</h1>
    <h2>Le tableau avant</h2>
    <table>
        <tr><?= $tableAvant; ?> </tr>
    </table>
    
    <hr>
    <h2>Le tableau après</h2>
    <table>
        <tr><?= $tableApres; ?> </tr>
    </table>
</body>
</html>