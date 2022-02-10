<?php
$tabSeptembre =array(20, 20, 20, 20, 24, 19, 18, 17, 16, 17, 17, 18, 17, 17, 14, 15, 16, 16, 16, 17, 17, 19, 17, 20, 19, 20, 21, 21, 24, 17);
    $nbLigne=1;
    $table = "";

    for ($i=0; $i < count($tabSeptembre); $i++) { 
        $table .= "<tr><td>$nbLigne Septembre</td><td>$tabSeptembre[$i] °C</td></tr>";
        $nbLigne++;
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
    <table>
        <?= $table ?> 
    </table>
</body>
</html>