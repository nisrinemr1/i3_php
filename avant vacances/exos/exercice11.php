
    <?php 
     //ctrl d pour selectionner les mêmes valeurs
     // === Ceinture de sécurité
    // var_dump($_POST);
    // si le form a été soumis . J'ai appuyé sur Tester
    if (isset($_POST["tester"])) {
        // si il existe une variable pret ET une variable panierVide en POST
        if(isset($_POST["pret"], $_POST["panierVide"]))
        {
            $pret = filter_var($_POST["pret"], FILTER_VALIDATE_BOOLEAN);
            $panierVide = filter_var($_POST["panierVide"], FILTER_VALIDATE_BOOLEAN);
            if ($pret && !$panierVide) {
                $message = "Lancer la balle";
            }
            else {
                $message = "Ne pas lancer la balle";
                $message = "<ul>";
                if (!$pret) {
                    $message = "<li>Car vous n'êtes pas prêt</li>";
                }
                if ($panierVide) {
                    $message = "<li>Car le panier est vide</li>";
                }
                $message = "</ul>";
            }
        }
        else {
            
            $message = "<p class='red'>Veuillez remplir les champs</p>";
        }
        
    }  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balle de tennis</title>
    <style>
    .red{
        color:red;
    }
    .green{
        color:green;
    }
    </style>
    <!-- pour que le message soit en rouge sans creer de ficher css. PAS BIEN ! dans la vraie vie on fait pas! -->
</head>
<body>
    <h1>Exos2 Le tennis</h1>
    <form action="#" method="post">   
        <p>Prêt ?</p>
        <input type="radio" name="pret" id="pretOui" value="true">
        <label for="pretOui">Oui</label>
        <!-- Le label doit avoir le même nom que l'id!!!! -->
        <!-- Avec tout ça y a juste le petit oui. Pas le non. -->
        <input type="radio" name="pret" id="pretNon" value="false">
        <label for="pretNon">Non</label>
        <br>


        <p>Le pannier est vide ?</p>
        <input type="radio" name="panierVide" id="panierOui" value="true">
        <label for="panierOui">Oui</label>
        <input type="radio" name="panierVide" id="panierFalse" value="false">
        <label for="pretFalse">Non</label>
        <br>
        <input type="submit" name="tester" value="Tester">
    </form>
    <?= $message ?> 

</body>
</html>