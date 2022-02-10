<?php 
    
    if(isset($_GET["section"])){
        switch ($_GET["section"]) {
            case 'accueil':
                include("view/page/accueil.php");
                break;
            case 'culture':
                include("view/page/culture.php");
                break;
            case 'hangeul':
                include("view/page/hangeul.php");
                break;
                case 'satoori':
                    include("view/page/satoori.php");
                    break;
            default:
                # code...
                break;
        }

    }
    else {
        include("view/page/accueil.php");
    }
?>