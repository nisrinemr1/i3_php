<?php 
    $message = "";

    if(isset($_POST["note"])){
        $note = $_POST["note"];

        if($note >= 0 && $note <= 20){
            if($note < 10){
                $message = '<p style="color:orange">La note ' . $note . ' correspond à I</p>';
            }
            elseif ($note < 13) {
                $message = '<p style="color:yellow">La note ' . $note . ' correspond à S</p>';
            }
            elseif ($note < 16) {
                $message = '<p style="color:lightgreen">La note ' . $note . ' correspond à B</p>';
            }
            elseif ($note < 19) {
                $message = '<p style="color:green">La note ' . $note . ' correspond à TB</p>';
            }
            else {
                $message = '<p style="color:gold">La note ' . $note . ' correspond à Excellent</p>';
            }

        }
        else {
            $message = '<p class="red">La note n\'est pas valide</p>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo5</title>
    <style>
        .flex {
            display:flex;
            justify-content: space-around;
        }

        .flex div {
            width:40%;
            border : 1px dotted black;
            padding : 10px;
        }

        div > table th, div > table td {
            border : 1px solid black;
        }

        div > table {
            border-collapse : collapse;
        }

        .red {
            color: red;
        }

    </style>
</head>
<body>
    <h1>Exo5</h1>
    <div class="flex">
        <div>
            <table>
                <tr>
                    <th>Note</th>
                    <th>Appréciation</th>
                    <th>Couleur</th>
                </tr>
                <tr>
                    <td><10</td>
                    <td>I</td>
                    <td>Orange</td>
                </tr>
                <tr>
                    <td>10-12</td>
                    <td>S</td>
                    <td>yelllw</td>
                </tr>
                <tr>
                    <td>13-15</td>
                    <td>B</td>
                    <td>lightgreen</td>
                </tr>
                <tr>
                    <td>16-18</td>
                    <td>TB</td>
                    <td>green</td>
                </tr>
                <tr>
                    <td>>=19</td>
                    <td>Excellent</td>
                    <td>gold</td>
                </tr>
            </table>
        </div>
        <div>
            <form action="#" method="post">
                <label for="note">Entrez la note de l'étudiant</label>
                <input type="number" step="any" name="note" id="note">
                <input type="submit" value="Tester">
            </form>
            <?= $message; ?> 
        </div>
    </div>
</body>
</html>