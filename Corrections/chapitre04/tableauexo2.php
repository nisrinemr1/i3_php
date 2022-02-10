<?php 
//initialiser tableau vide
    $tab = array ();

    $nombre = 1;

    for ($i=0; $i < 10; $i++) { 
        //calculer nombre *2    
        $nombre = $nombre *2;
        //ajout au tableau 
        $tab[$i] = $nombre;
        $table .= "<td>$tab[$i]</td>";
    }
    var_dump($tab);
   
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
        <?= $table ?>
        <!-- boucle génerera ma tr -->
    </table>
</body>
</html>