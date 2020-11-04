<?php

if(isset($_REQUEST['submit'])){
    
    if(!empty($_REQUEST['day']) and !empty($_REQUEST['month']) and !empty($_REQUEST['year'])){
        
        $day = intval($_REQUEST['day']);
        $month = intval($_REQUEST['month']);
        $year = intval($_REQUEST['year']);
        
        if($day > 0 and $day < 32 and $month > 0 and $month < 13 and $year > 1899 and $year < 2017){
            
            echo "Date: ".$day."/".$month."/".$year;
            
        }
        
        else{
            
            header('location: dateOfBirth.html?msg=invalid_date');
            
        }
        
    }
    
    else{
        
        header('location: dateOfBirth.html?msg=null_value');
        
    }
    
    
}

else{
    
    header('location: dateOfBirth.html?msg=error');
    
}

?>