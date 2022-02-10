<?php 
  /*  $nombre = 1;
    while ($nombre <= 10){
        $message = 2 * $nombre;
        echo "2 X $nombre = $message <br>";
        $nombre++;
    } après je dois l'inserer dans l'hmtl.*/
    
    $multiplicateur = 1;
    $message = "";

    while($multiplicateur <= 10){
        $resultat = 2 * $multiplicateur;
        $message.= "2 X $multiplicateur = $resultat <br>";
        $multiplicateur ++ ; 
    }

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
    <h1>Exo 1 </h1>
    <p> <?= $message ?></p>

</body>
</html>