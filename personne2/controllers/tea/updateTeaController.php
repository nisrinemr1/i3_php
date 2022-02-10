<?php
    include("models/Tea.php");
    $tea = new Tea();
    $msg = "";
    // TODO : sécuriser si id n'existe pas dans URL
    // idem que dans le delete
    $t = $tea->getTea($_GET["id"]);
    var_dump($t["nom"]);

    if(isset($_POST["tea"])){
        if(trim($_POST["tea"])!= ""){
            $tea->updateTea($t["the_id"], $_POST["tea"]);
            // rediriger vers une autre page
            header("Location:?section=getAllTea");
        }
        else {
            $msg ="<p style='color:red'>Veuillez remplir le champ Thé</p>";
        }
    } 

    include("views/page/tea/updateTea.php");

?>