<?php

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['name']) or !empty($_REQUEST['id']) or !empty($_REQUEST['password']) or !empty($_REQUEST['radio'])){
        
        if($_REQUEST['password'] == $_REQUEST['cpassword']){
            
            $myfile = fopen('register.txt', 'a');
	        $data = $_REQUEST['radio']."|".$_REQUEST['password']."|".$_REQUEST['id']."|".$_REQUEST['name']."\n";
	        fwrite($myfile, $data);
	        fclose($myfile);
            
        }
        
        else{
            
            echo "Error";
            
        }
        
    }
    
    else{echo "Please fill up all information.";}
    
}

?>