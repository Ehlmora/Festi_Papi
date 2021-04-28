<?php
?>
<div>
    <h1>Hébergement</h1>
    <a href="../public/index.php?uc=lodge&action=create">Ajouter</a>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
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