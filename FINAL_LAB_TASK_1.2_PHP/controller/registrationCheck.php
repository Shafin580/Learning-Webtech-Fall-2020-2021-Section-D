<?php

require_once('../models/userService.php');

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['name']) and !empty($_REQUEST['contactNo']) and !empty($_REQUEST['username']) and !empty($_REQUEST['password'])){
        
        if(userRegistration($_REQUEST['name'], $_REQUEST['contactNo'], $_REQUEST['username'], $_REQUEST['password'])){
            
            header('location: ../view/registration.php?msg=registration_completed');
            
        }
        
        else{
            
            header('location: ../view/registration.php?msg=registration_failed');
            
        }
        
    }
    
    else{
        
        header('location: ../view/registration.php?msg=null');
        
    }
    
}



?>