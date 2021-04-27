<?php
function getBooking(){
    $db = dbConnect();
    $cmd = 'SELECT groupe.nom AS groupe, etablissement.nom AS etablissement, reservationgroupechambre.idChambre AS chambre, reservationgroupechambre.nbPersonnes AS nbPersonnes 
    FROM groupe 
    INNER JOIN reservationgroupechambre ON groupe.id = reservationgroupechambre.idGroupe 
    INNER JOIN etablissement ON reservationgroupechambre.idEtablissement = etablissement.id';
    $req = $db->prepare($cmd);
    $req->execute();
    $listLodge = $req->fetchAll();
    $req->closeCursor();
    return $listLodge;
}