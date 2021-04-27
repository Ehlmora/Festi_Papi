<?php
include("Database.php");
function users()
{
    $db = dbConnect();
    $sel = 'SELECT * FROM utilisateur';
    $req = $db->prepare($sel);
    $req->execute();
    $listUsers = $req->fetchAll();
    $req->closeCursor();
    return $listUsers;

}
?>