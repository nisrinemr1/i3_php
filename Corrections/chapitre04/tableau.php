<?php 
    $tab = array (1,2,3,4,5,6);
    //contenu de mon tableau donc il faut le laisser 
    /* var_dump($tab);
    count($tab)."<tr>"; */
    $table = "";
    
    for($i=0; $i < count($tab); $i++){
        $table .= "<tr><td>$tab[$i]</td></tr>";
    }
/* 
    $tab2 = array (2,4,8,16,32,64,128,256,512,1024);
    $table2 = "";

    for($i2 =0; $i2 < count($tab2); $i2*2){
        $table2 .= "<tr><td>$tab[$i2]</td></tr>";
    } */
    
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