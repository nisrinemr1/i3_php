<?php 
function carre($nb1){
    $resultat = $nb1 * $nb1;
    return $resultat;
}
    //première manière de return! 
    echo carre(2);

    
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
    <p>Le carré de <?= $nb ?> est égal à <?= $result ?>  </p>
</body>
</html>