<?php

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['name']) and !empty($_REQUEST['contactNo']) and !empty($_REQUEST['username']) and !empty($_REQUEST['password'])){
        
        
        
    }
    
    else{
        
        header('location: ../view/registration.php?msg=null');
        
    }
    
}



?>