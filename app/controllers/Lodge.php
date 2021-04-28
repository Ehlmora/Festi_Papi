<?php
require_once("../app/models/Database.php");
require_once("../app/models/Lodge.php");
if(!isset($_GET['action'])){
    $action = "lodge";
}else{
   $action = $_GET['action'];  
}

switch($action)
{
    case 'lodge':
        {
            $listLodge = getLodge();
            require('../views/Lodge.php');break;}    
    case 'create':
        {
            if(isset($_POST['name'])){
                var_dump($_POST);
                try{
                    createLodge($_POST);
                }catch(Exception $e){
                    echo('Erreur PDO  dans '.$e->getFile().' ligne : '.$e->getLine().' : '.$e->getMessage());
                }
            }else{
                require('../views/CreateLodge.php');break;
            }
        }
}  

   
