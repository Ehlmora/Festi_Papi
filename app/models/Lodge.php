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

function createLodge($list){
    $db = dbConnect();
    $cmd = 'INSERT INTO etablissement(nom,adresse,ville,codePostal) VALUES(:name,:address,:city,:postalCode)';
    $req = $db->prepare($cmd);
    $req->bindParam(':name',$_POST['name']);
    $req->bindParam(':address',$_POST['address']);
    $req->bindParam(':city',$_POST['city']);
    $req->bindParam(':postalCode',$_POST['postalCode']);
    $req->execute();
    $req->closeCursor();
}