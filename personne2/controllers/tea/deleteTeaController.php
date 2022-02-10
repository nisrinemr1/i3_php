<?php 
    include("models/Tea.php");
    $tea = new Tea();
    $msg = "";
    

    // récupérer le thé à supprimer
    if($tea->getTea($_GET["id"]) != null){
        $t = $tea->getTea($_GET["id"]);
        // var_dump($t);

        if(isset($_POST["reponse"]) && $_POST["reponse"] == "Oui"){
            $tea->deleteTea($t["the_id"]);
            header("Location:?section=getAllTea");
        }

        include("views/page/tea/deleteTea.php");


    }
    else {
        echo "<p style='color:red'>Le thé n'existe pas</p>";
    }
    
?>