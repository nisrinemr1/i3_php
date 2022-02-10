<?php 
   /* $pointsJean = 15;
    $pointsPaul = 9;
    $reussiteJean = ($pointsJean >= 10);
    $reussitePaul = ($pointsPaul >= 10);
    echo "Jean à $reussiteJean et Paul à $reussitePaul<br>";*/
    /* du coup ça montre Jean 1 (true) et Paul rien (fasle) */
/* Les  affectations: */
$nb1 = 4; 
//+1
$nb1 = $nb1 + 1;
var_dump($nb1);
/* il donne int 5 :) */
$nb1 += 1;
var_dump($nb1);
/* Il se rebase sur le new nb1 et ajoute en plus avec +=1 d'ou le 6 */
/* demander à Mélanie pourquoi ça n'affiche pas comme elle  */

$nb1++; 
var_dump($nb1);
/* manière plus flemmarde de le faire. */
/* pareille avec le moins. Faut juste remplacer le plus par moins. PHP il lit comme nous. */
/* sur windows ils montre a quel lignes se trouve les var_dump */


?>