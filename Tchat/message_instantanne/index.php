<?php 
    // Permet de se connecter à la BD
    // On crée une varible BD et new PDO -> voir Google https://www.php.net/manual/fr/book.pdo.php
    //mysql:host=localhost => Permet de se connecter a mysql via notre hebergeur localhost
    //root 1 = pseudo | root 2 = message
    $bdd = new PDO ('mysql:host=localhost; dbname=messagerie; charset=utf8', 'root', 'root');

    // Creer des actions quand l'utilisateur clik sur envoyer
    // va executer l'action du bouton submit 
    if (isset($_POST['valider'])) {
        // On verifie que l'utilisateur a bien rentré le pseudo et le message
       if(!empty($_POST['pseudo']) AND !empty($_POST['message'])) {
           //Executer les actions stocker le pseudo et le message
           //htmlspecialchars => pour ne pas pouvoir encoder du code html
           $pseudo = htmlspecialchars($_POST['pseudo']);
           //nl2br => permet à l'utilisateur de faire des sauts de lignes
           $message = nl2br(htmlspecialchars($_POST['message']));


           //Inserer le message au niveau de la table 
           // ?, ? on attend 2 valeurs => pseudo et message
           $insererMessage = $bdd->prepare('INSERT INTO messages (pseudo,message) VALUES (? , ?)');
            // Cree un tableau dans mysql(parcourir) qui stock pseudo et message 
           $insererMessage->execute(array($pseudo, $message));
       }
       else{
           echo "Veuillez completer tous les champs...";
       }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tchat</title>

    
    
</head>

<body>
    <!-- Form permet d'envoyer les messages-->
    <!-- Methode POST => pcq on envoi les messages vers une BD-->
    <form method="POST" action="">

        <input type="text" name="pseudo">

        <br><br>

        <textarea name="message"></textarea>

        <br><br>
        
        <!-- Permet d'envoyer les messages -->
        <input type="submit" name="valider">

    </form>
    <!-- ###  Partie qui va stocker tous les messages-->
    <section id="messages"></section>



<!-- Permettra de donner de l'instateneite à l'affichage du message -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
// On crée une sorte de boucle qui va venir s'executer toutes les x sec et va charger le fichier ici loadMessage
// Pour donner l'effet d'instantaneitée
// ('On cree une nouvelle fonction pour charger les messages)', execite la boucle +sieurs fois 3sec
setInterval('load_messages()', 3000 );
//on declare la fonction load message va fenir charger le code de load message et le charger toutes les 3sec
function load_messages(){
    //On importe le JS 
    // # endroit ou l'on va charger le message ici section id messages load permet de charger le message
    $('#messages').load('../loadMessages.php');
}
</script>


</body>

</html>