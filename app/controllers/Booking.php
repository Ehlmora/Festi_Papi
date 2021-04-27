<?php
if(!isset($_GET['action'])){
    require('../views/Booking.php');
}else{
   $action = $_GET['action']; 
   switch($action)
    {
        case 'booking':
            {require('../views/Booking.php');break;}    
        case 'create':
            {require('../views/CreateBooking.php');break;}
    }   
}

   
