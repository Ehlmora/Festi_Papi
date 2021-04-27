<?php

if(!isset($_SESSION['user_co']))
{
    session_start();
    include "../views/login.php";
}
try{
/*     if(!isset($_GET['uc'])){
        $uc ='home';
    }else{
        $uc = $_GET['uc'];
    } */
    $uc = $_GET['uc'];
    switch($uc)
    {
        case 'home':
            {require('view/v_home.php');break;}
        case 'planning':
            {require('controller/c_userManagement.php');break;}
        case 'lodge':
            {require('../app/controllers/Lodge.php');break;}
        case 'logOut':
            {require('controller/c_logOut.php');break;}
    }
}catch(Exception $e){
    echo('Erreur PDO  dans '.$e->getFile().' ligne : '.$e->getLine().' : '.$e->getMessage());

}
