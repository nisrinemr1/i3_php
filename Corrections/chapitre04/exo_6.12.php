<?php 
     $tab = array (1,4,3,5,2);
     $table = "";
     
     for($i=0; $i < count($tab); $i++){
         $table .= "<td>$tab[$i]</td>";
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
        <th>Avant tri:</th>
        <tr>
        <?= $table ?>
        </tr>
    </table>
</body>
</html>