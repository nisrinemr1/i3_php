<?php //c'est pour le routeur! C'est juste un appel des fonctions 
    require("../class/Femme.php");
  
   $femme = new Femme();
   $femme->sePresenter();
   $femme->accoucher();
   // verif si enceinte
   $femme->afficheEstEnceinte();
   // met enceinte
   $femme->setEnceinte(9);
   // verif si enceinte
   $femme->afficheEstEnceinte();
    // accouche
    $femme->accoucher();
    // verifi si enceinte
    $femme->afficheEstEnceinte();
?>