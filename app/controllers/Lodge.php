<?php
if(!isset($_GET['action'])){
    require('../views/Lodge.php');
}else{
   $action = $_GET['action']; 
   switch($action)
    {
        case 'lodge':
            {require('../../views/Lodge.php');break;}    
        case 'create':
            {require('../../views/CreateLogdge.php');break;}
    }   
}

   
