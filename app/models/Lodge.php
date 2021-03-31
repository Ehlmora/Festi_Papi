<?php
function getLodge(){
    $db = dbConnect();
    $cmd = 'SELECT id,nom,adresse,ville,codePostal FROM etablissement';
    $req = $db->prepare($cmd);
    $req->execute();
    $listLodge = $req->fetchAll();
    $req->closeCursor();
    return $listLodge;
}