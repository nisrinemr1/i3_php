<?php 
    include("../class/Personne.php");
    $moi = new Personne(); // instanciation d'un objet Personne
    $moi->parler("Bonjour"); // appel de la méthode qui lui est propre (seules les personnes savent le faire
    $moi->sePresenter();
    $moi->donnerAge();
?>