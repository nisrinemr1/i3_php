<?php 
    include("../class/Poisson.php");

    //construire les 2 poissons 
    $p1 = new Poisson("Poisson1", "gris", 10);
    $p2 = new Poisson("Poisson2", "rouge", 7);
    //car si je veux les faires manger, il faut qu'ils soient en nb

    // afficher leurs "presentation"
    $p1->sePresenter();
    $p2->sePresenter();

    // poisson 1 mange poisson 2
    $p1->poids;
    $p2->poids;
    echo "poisson 1 : " . $p1->poids ." et poisson 2 : ". $p2->poids .".";

    $p1->manger($p2);

    $p1->seRePresenter();
    $p2->seRePresenter();

    //afficher leurs nouvelle "présentation" 
    //le nouveau poids du poisson1 est de 17kg
    //le nouveau poids du poisson 2 est de 0kg
?>