<?php
require_once("../app/models/Database.php");
require_once("../app/models/Lodge.php");
$listLodge = getLodge();




?>
<div>
    <h1>Hébergement</h1>
    <a href="../public/index.php?uc=lodge&action=create" class="btn btn-outline-success">Ajouter</a>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Ville</th>
                <th scope="col">Code Postal</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($listLodge as $lodge){
            echo "
            <tr>
                <td>".$lodge['nom']."</td>
                <td>".$lodge['adresse']."</td>
                <td>".$lodge['ville']."</td>
                <td>".$lodge['codePostal']."</td>
                <td><button>Supprimer</button></td>
                <td><button>Modifier</button></td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>