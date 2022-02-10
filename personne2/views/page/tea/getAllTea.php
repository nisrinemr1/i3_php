<h2>Tous les thés</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["role"]==1): ?>
        
            <th>Modifier</th>
            <th>Supprimer</th>
        <?php endif ?>
        
    </tr>
    <?= $table; ?> 
</table>