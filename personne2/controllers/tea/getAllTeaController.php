<?php 
    // inclus la classe Tea
    include("models/Tea.php");
    // créer un objet de type tea
    $tea = new Tea();
    // faire appel getAllTea qui récupérer tout depuis la table The
    $teas = $tea->getAllTea();
    // afficher momentanément les tés
    // var_dump($teas);

    // générer le table
    $table = "";
    // boucle
    foreach($teas as $t){
        // var_dump($t);
        $table .= "<tr>";
        $table .= "<td>". $t['the_id'] . "</td>";
        $table .= "<td>". $t['nom'] . "</td>";
        if(isset($_SESSION["user"]) && $_SESSION["user"]["role"] == 1){
            // modifier
            $table .= "<td><a href='?section=updateTea&id=". $t['the_id'] . "'>mod</a></td>";
            // supprimer
            $table .= "<td><a href='?section=deleteTea&id=". $t['the_id'] . "'>sup</a></td>";
        }
        
        $table .= "</tr>";
    }

    include("views/page/tea/getAllTea.php");

?>