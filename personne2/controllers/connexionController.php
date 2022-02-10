<?php 
    include("models/User.php");
    $msg="";
    if(isset($_POST["email"], $_POST["mdp"])){
        $connexionUser= new User();

        $user = $connexionUser->verify(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['mdp']));

        if($user != false){
            $_SESSION["user"] = $user;
            var_dump($_SESSION["user"]);
            header("Location:?section=getAllTea");
        }
        else{
            $msg = "<p style='color:red'>L'email / mot de passe ne sont pas valides</p>";
        }
    }


    include("views/page/connexion.php");
?>