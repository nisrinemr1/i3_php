<?php 
    $tabMois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
    $table = "";

    for($i=count($tabMois)-1; $i >= 0; $i--){
        $table .= "<td>$tabMois[$i]</td></tr>";
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
        <tr>
        <?= $table ?> 
        </tr>
    </table>
</body>
</html>