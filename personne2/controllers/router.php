<?php 
    if(isset($_GET["section"])){
        if(isset($_SESSION["user"])){
            include("views/menu/menu-co.php");
            if($_SESSION["user"]["role"]=== "1"){
                // role admin peut tout faire
                $tabAcces = [
                    "accueil" => "accueil", 
                    "getAllTea" => "tea/getAllTea",
                    "addTea" => "tea/addTea",
                    "updateTea" => "tea/updateTea",
                    "deleteTea" => "tea/deleteTea",
                    "deconnexion" => "deconnexion"
                ];
                if(array_key_exists($_GET["section"],$tabAcces)){
                    include("controllers/". $tabAcces[$_GET["section"]]."Controller.php");
                }
                else {
                    include("controllers/404Controller.php");
                }
            }
            else {
                // role collaborateur peut voir 
                $tabAcces = [
                    "accueil" => "accueil", 
                    "getAllTea" => "tea/getAllTea",
                    "addTea" => "tea/addTea",
                    "deconnexion" => "deconnexion"
                ];
                if(array_key_exists($_GET["section"],$tabAcces)){
                    include("controllers/". $tabAcces[$_GET["section"]]."Controller.php");
                }
                else {
                    include("controllers/404Controller.php");
                }    
            }
        }
        else {
            // rôle anonyme
            include("views/menu/menu-deco.php");
            $tabAcces = [
                "accueil" => "accueil", 
                "getAllTea" => "tea/getAllTea",
                "connexion" => "connexion"
            ];
            if(array_key_exists($_GET["section"],$tabAcces)){
                include("controllers/". $tabAcces[$_GET["section"]]."Controller.php");
            }
            else {
                include("controllers/404Controller.php");
            }
        } 
    }
    else {
        include("controllers/accueilController.php");
        include("views/menu/menu-co.php");
    }
