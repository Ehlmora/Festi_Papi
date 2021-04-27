<?php
require_once("../app/models/Database.php");
require_once("../app/models/Booking.php");
$listBooking = getBooking();
?>
<div>
    <h1>Réservations</h1>
    <a href="../public/index.php?uc=lodge&action=create" class="btn btn-outline-success">Ajouter</a>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Groupe</th>
                <th scope="col">Établissement</th>
                <th scope="col">Chambre</th>
                <th scope="col">Nombre de personne</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($listBooking as $booking){
            echo "
            <tr>
                <td>".$booking['groupe']."</td>
                <td>".$booking['etablissement']."</td>
                <td>".$booking['chambre']."</td>
                <td>".$booking['nbPersonnes']."</td>
                <td><button class='btn btn-danger'>Supprimer</button></td>
                <td><button class='btn btn-primary'>Modifier</button></td>
            </tr>";
        }
        ?>
        </tbody>
    </table>
</div>