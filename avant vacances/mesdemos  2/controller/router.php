<?php 

    if(isset($_GET["section"])){
        switch ($_GET["section"]) {
            case 'accueil':
                include("view/page/accueil.php");
                break;

            case 'cours':
                include("view/page/cours.php");
                break;
            
            default:
                # code...
                break;
        }
    }

    else{
        include("view/page/accueil.php");
    }

?>