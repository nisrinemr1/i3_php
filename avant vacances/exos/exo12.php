<?php 
    $message="";
    //comme ça on affiche le message lorsque php lis au fur et à mesure
    $coca = 0;
    $eau = 2;
    if(isset($_POST["choix"])) {
        $choix= $_POST["choix"];
        switch ($choix) {
            case '1':
                if($coca>0) {
                    $message="Voici votre Coca";
                    //mettre a jour stock
                    $coca --;
                    //$coca = $coca - 1;
                    //$coca -= 1;
                    // differentes manieres
                }
                else {
                    $message="Il n'y a plus de Coca";
                }
                break;
                //le case break permet de séparer les deux cas. 
            case '2':
                if ($eau >0) {
                   $message="Voici votre eau";
                   $eau--;
                }
                else {
                    $message="Il n'a plus d'eau";
                }
                break;
            default:
                $message = "Erreur : choix inconnu";
                break;
            }
            $message.="<br>Il reste $coca de coca et $eau d'eau";
            //comment afficher en bas la phrase
            
    }
    

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo Machine a boisson</title>
</head>
<body>
    <h1>🥤Distributeur de boisson!🥤</h1>
    <form action="#" method="post">
        <label for="choix">Choisissez votre boisson : </label>
        <select name="choix" id="choix">
            <option value="1">Coca</option>
            <option value="2">Eau</option>
</select>
<input type="submit" name="commander"  value="Commander">
<br>
</form>
<?=$message?> 
</body>
</html>                            