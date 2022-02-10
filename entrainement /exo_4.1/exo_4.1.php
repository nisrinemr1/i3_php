<!-- Année bissextile :
Réaliser un petit algorithme qui sur base d'une année donnée va déterminer s'il s'agit d'une année bissextile. Une année bissextile si elle est divisible par 4, mais non divisible par 100. Ou si elle est divisible par 400. -->

<?php 
    
    //récuperer l'année que l'utilisateur à insérer dans le dom
    $message = "";

    if(isset($_POST["annee"])){   
    $annee = $_POST["annee"];
    if($annee % 4 == 0 && $annee % 100 != 0 || $annee % 400 == 0)
    {
       $message = "L'année $annee encodée est bissextile :D";
    }
    else {
         $message = "L'année $annee encodée n'est pas bissextile :(";
    } 
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
    <h1>Année bissextile or not?</h1><br>
    <form action="#" method ="POST">
    <label for="annee">Insérer l'année:</label>
    <input type="number" id="annee" name="annee">
    <input type="button" value="envoyer">

    <p> <?= $message; ?> </p>
</form>
</body>
</html>