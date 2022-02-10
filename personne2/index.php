<?php 
    session_start();
    ob_start();
    if(isset($_SESSION["user"])){
        // var_dump($_SESSION["user"]);
    }
    include("views/html/head.php");
    include("controllers/router.php");
    include("views/html/footer.php");
?>