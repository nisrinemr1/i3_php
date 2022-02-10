<h2>Supprimer un thé</h2>
<form action="#" method="post">
    <label for="tea">Etes-vous sûr(e) de vouloir supprimer "<?= $t["nom"] ?>" </label>
    <input type="hidden" name="tea" id="tea">
    <input type="submit" name="reponse" value="Oui">
    <a href="?section=getAllTea">Non</a>
</form>