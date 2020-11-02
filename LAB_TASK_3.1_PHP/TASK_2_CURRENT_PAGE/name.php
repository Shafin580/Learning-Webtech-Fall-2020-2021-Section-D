<?php

if(isset($_REQUEST['submit'])){
    
    if($_POST['Name']==""){
        
        echo "nothing was inputed";
        
    }
    
    else{
        echo "Name: ".$_POST['Name'];
    }
    
    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTML Form - Name</title>
</head>
<body>
    
    <form method="post" action="name.php">
        
        <fieldset style="width: 180px;">
            
        <legend><b>NAME</b></legend>
        <input type="text" name="Name"> <hr>
        <input type="submit" name="submit" value="Submit">
            
        </fieldset>
        
        
    </form>
    
</body>
</html>