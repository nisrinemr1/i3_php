<nav>
    <ul>
        <li><a href="?section=accueil">Accueil</a></li>
        <li><a href="?section=getAllTea">Tous les thés</a></li>
        <li><a href="?section=addTea">Ajouter un thé</a></li>
        <li><?= $_SESSION["user"]["email"] ?> <a href="?section=deconnexion">Déconnexion</a></li>
    </ul>
</nav>