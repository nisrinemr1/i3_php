<?php 
    // Permet de se connecter à la BD
    // On crée une varible BD et new PDO -> voir Google https://www.php.net/manual/fr/book.pdo.php
    //mysql:host=localhost => Permet de se connecter a mysql via notre hebergeur localhost
    //root 1 = pseudo | root 2 = message
    $bdd = new PDO ('mysql:host=localhost; dbname=messagerie; charset=utf8', 'root', 'root');

    // Permet de stocker tous les messages dans <section> tout est recuperé par la $recupMessages
    // on cree une requete recup pour recuperer tous les messages
    // SELECT * FROM = select all from
    // requete query permet de tout recup
    $recupMessages = $bdd->query('SELECT * FROM messages');

    // On crée une boucle => à chaque fois qu'un message a ete trouve dans la BD on l'affiche
    while ($message = $recupMessages->fetch()){
        ?>
        <div class="message">
        <!-- les balises avec ? = diminutif de echo en php-->
        <h4><?= $message['pseudo'];?></h4>
        <p><?= $message['message'];?></p>
        </div>
        <?php 
            
       

    }
    ?>