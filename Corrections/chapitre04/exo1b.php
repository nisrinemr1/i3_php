<?php 
    $message = "";

    if(isset($_POST["annee"])){
        $annee = $_POST["annee"];
        if($annee%4==0 && $annee % 100 != 0 || $annee % 400 == 0){
            // bissextile
            $message = "L'année $annee est une année bissextile";
        }
        else {
            // n'est pas bissextile
            $message = "L'année $annee n'est pas une année bissextile";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
    <h1>Exo1</h1>
    <form action="#" method="post">
        <!-- method sans e!!!!! -->
        <label for="annee">Entrez votre année : </label>
        <input type="number" name="annee" id="annee">
        <input type="submit" value="Tester">
    </form>
    <p><?= $message; ?> </p>
</body>
</html>