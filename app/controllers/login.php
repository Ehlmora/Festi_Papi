<?php
session_start();

require('../models/login.php');

if(!isset($_GET['action'])){
    require('../views/login.php');
}else{
   $action = $_GET['action']; 
   switch($action)
    {
        case 'connect':
            {
                if(connect($_POST['nomU'], $_POST['mdp']))
                {   
                    require("../public/index.php");
                }
                else
                {
                    require("../public/index.php");
                }
                break;
            }    
    }   
}

function connect($log, $mdp)
{
    $users = users();
    foreach($users as $value)
    {
        if($value['identifiant'] == $log AND $value['motDePasse'] == $mdp)
        {
            $_SESSION['user_co'] = $value['identifiant'];
            return true;
        }
        else
        {
            echo "<script>alert('Identitifiant ou mot de passe incorrect !')</script>";
            return false;
        }
    }
}