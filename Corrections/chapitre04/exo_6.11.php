<?php
    $tabSeptembre=array(20, 20, 20, 20, 24, 19, 18, 17, 16, 17, 17, 18, 17, 17, 14, 15, 16, 16, 16, 17, 17, 19, 17, 20, 19, 20, 21, 21, 24, 17);
    $table = "";
    $moyenne= 0;
    $somme= 0;

    for ($i=0; $i < count($tabSeptembre); $i++) { 
        
        $table .= "<td>$tabSeptembre[$i]</td>";
        
        $somme = $somme+$tabSeptembre[$i];
    }
    $moyenne = $somme /count($tabSeptembre);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>
<body>
    <h1>Coucou petite mandibule</h1>
    <table>
        <tr>
            <?= $table ?> 
        </tr>
    </table>
    <p><?= $moyenne ?> </p>
</body>
</html>