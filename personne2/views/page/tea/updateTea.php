<h2>Modifier un thé</h2>

<form action="#" method="post">
    <label for="tea">Thé : </label>
    <input type="text" name="tea" id="tea" value="<?= $t["nom"]; ?>">
    <input type="submit" value="Modifier">
</form>
<?= $msg; ?> 