<?php 
    // importer la femme
    require_once("../class/Femme.php");
    // créer une femme
    $f = new Femme();
    // tester l'accouchement sans etre enceinte
    $f->accoucher();
    // $f->sexeEnfant();
    // vérifiez si elle est enceinte
    $f->afficheEstEnceinte();
    // - faite en sorte qu'elle devienne enceinte
    $f->setEnceinte(5);
    // - vérifiez si elle est enceinte
    $f->afficheEstEnceinte();
    // - faites en sorte qu'elle accouche
    $f->accoucher();
    // - vérifiez si elle est enceinte
    $f->afficheEstEnceinte();
?>