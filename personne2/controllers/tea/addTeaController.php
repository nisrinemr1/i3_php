<?php 
    include("models/Tea.php");
    $tea = new Tea();
    $msg = "";

    if(isset($_POST["tea"])){
        if(trim($_POST["tea"])!= ""){
            $tea->addTea($_POST["tea"]);
            // rediriger vers une autre page
            header("Location:?section=getAllTea");
        }
        else {
            $msg ="<p style='color:red'>Veuillez remplir le champ Thé</p>";
        }
    }

    include("views/page/tea/addTea.php");

?>