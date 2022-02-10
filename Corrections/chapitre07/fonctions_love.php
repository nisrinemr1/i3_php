<?php 
    function afficheTableau($table){
        $tr = "";
        for ($i=0; $i < count($table); $i++) { 
            $tr .= "<td>$table[$i]</td>";
        }
        return $tr;
    }
?>