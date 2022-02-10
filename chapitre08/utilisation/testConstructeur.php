<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__."/class/Homme.php");
require_once(__ROOT__. "/class/Femme.php");

$jules = new Homme("César", "Jules", "1950/07/07");
$jules->sePresenter();
$cleopatre = new Femme("D'Egypte","Cléopatre", "1960/08/08");
// modifier le statut de cléopatre
$cleopatre->setEstFiance(false);
$cleopatre->sePresenter();

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