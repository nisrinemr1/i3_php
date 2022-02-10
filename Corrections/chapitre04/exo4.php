<?php 
    $message = "";
    $nb1 = "";
    $nb2 = "";
    $selectedPlus = "";
    $selectedMoins = "";
    $selectedFois = "";
    $selectedDiv = "";

    if (isset($_POST["nb1"], $_POST["op"], $_POST["nb2"])) {
        $nb1 = $_POST["nb1"];
        $nb2 = $_POST["nb2"];
        $op = $_POST["op"];

        switch ($op) {
            case '+':
                $selectedPlus = "selected";
                $message = $nb1 + $nb2;
                break;
            case '-':
                $selectedMoins = "selected";
                $message = $nb1 - $nb2;
                break;
            case '*':
                $selectedFois = "selected";
                $message = $nb1 * $nb2;
                break;
            case '/':
                $selectedDiv = "selected";
                if($nb2 != 0) {
                    $message = $nb1 / $nb2;
                }
                else{
                    $message = "Division par 0";
                }
                break;
            
            default:
                $message = "<p class='red'>Erreur : opérateur inconnu</p>";
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo4</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Exo4</h1>
    <form action="#" method="post">
        <input type="number" name="nb1" id="nb1" step="any" value="<?= $nb1; ?>">
        <select name="op" id="op">
            <option value="+" <?= $selectedPlus; ?> >+</option>
            <option value="-" <?= $selectedMoins; ?> >-</option>
            <option value="*" <?= $selectedFois; ?> >*</option>
            <option value="/" <?= $selectedDiv; ?> >/</option>
        </select>
        <input type="number" name="nb2" id="nb2" step="any" value="<?= $nb2; ?>">
        <input type="submit" value="=">
    </form>
    <?= $message; ?> 
</body>
</html>