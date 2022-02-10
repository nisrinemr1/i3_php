<?php 
    define('__ROOT__', dirname(dirname(__FILE__)));
    require_once(__ROOT__."/class/Homme.php");
    require_once(__ROOT__. "/class/Femme.php");

    
    $jules = new Homme();
    $jules->setNom("César");
    $jules->setPrenom("Jules");
    
    $cleopatre = new Femme();
    $cleopatre->setNom("D'Egypte");
    $cleopatre->setPrenom("Cléopatre");
    // modifier le statut de cléopatre
    $cleopatre->setEstFiance(false);

    // afficher l'état de fiancé
    $cleopatre->afficherFiance();

    // la demande en mariage
    $jules->demanderEnMariage($cleopatre);

    
    // répondre à la demande en mariage
    $cleopatre->repondreDemandeMariage(true, $jules);
    // voir le statut
    $jules->afficherFiance();
    $cleopatre->afficherFiance();
?>