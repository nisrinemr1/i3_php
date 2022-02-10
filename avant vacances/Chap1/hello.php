<?php 
    echo "hello<br>";
    //obliger de finir avec un ;
    //il faut d'abord voir si serveur est activer (mamp)
    //localhost fonctionne pas sur internet explorer.
    $nomUtilisateur = "Some_onee";
    //pour afficher contenu d'une variable on utilise echo on peut inserer le br juste après l'egal pour un retour a la ligne.
    echo $nomUtilisateur . "<br>"; 

    //pour concaténer "nb1 = " & nb1  sauf que pour pour php c'est pas & mais . 
    // c'est la premiere possibilité. 
    echo "nomUtilisateur = ". $nomUtilisateur . "<br>";
    //du coup pour rajouter un br il faut ajouter un .
    //Possibilité 2 
    echo "nomUtilisateur = $nomUtilisateur". "<br>";
    // jamais mettre le '' sinon il va ecrire le code avec le $ et pas forcement besoin de mettre les balises html pour afficher php. Il le génere solo. mais il faut le faire dans un vrai site. mais pas dans les exos qu'on va faire. 

    
?>

<!--pour afficher la biblio jquery  il faut juste l'ecrire + tab et ça donne le lien qui mène à Jquery-->
<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
inon y a bootrap CSS aussi mais les sites sont toutes les mêmes. Possible de l'utiliser si c'est pour faire des sites vites fait bien fait pour monrtrer au client si on a pas le temps.simplement ecrire bs et le liens y est.
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> ça c'est pour css et bsjs c'est pour javascript-->