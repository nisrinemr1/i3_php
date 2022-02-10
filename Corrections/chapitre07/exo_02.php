<?php 
    $tableau= "";
    $tab = array(9,2,6,8,5);
    $position = recherche($tab, count($tab), 8);
    
    function recherche($table, $taille,$valeur){
    for ($i=0; $i < $taille ; $i++) { 
        if ($table[$i] == $valeur) {
        $pos = $i;
    }
    }
    return $pos;
    }

echo $pos;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>La valeur recherchée est en position : <?= $position; ?> </p>
</body>
</html>