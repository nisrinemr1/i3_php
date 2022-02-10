<?php 
// créer une consante qui contient le chemin de tout le dossier source
// dirname : fonction qui retourne le chemin de dossier parent => chapitre08
define('__ROOT__', dirname(dirname(__FILE__)));
// importer les classes
require_once(__ROOT__."/class/Homme.php");
require_once(__ROOT__. "/class/Femme.php");

// création d'un homme
$jules = new Homme();
// mis à jour du nom et du présnom
$jules->setNom("César");
$jules->setPrenom("Jules");
// création d'une femme
$cleopatre = new Femme();
// mis à jour du nom et du prénom
$cleopatre->setNom("D'Egypte");
$cleopatre->setPrenom("Cléopatre");

// la demande en mariage

$jules->demanderEnMariage($cleopatre);
$cleopatre->afficherFiance($cleopatre);
$jules->statusApresDemande($jules);
$cleopatre->statusApresDemande($cleopatre);


?>
