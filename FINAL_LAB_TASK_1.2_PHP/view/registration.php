<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop - Registration</title>
</head>
<body>
    
    <br><br><br><br><br><br><br>
    
    <center>
        
        <fieldset>
            
            <legend><b>Registration</b></legend>
            
            <form action="../controller/registrationCheck.php" method="post">
            
            Name : <input type="text" name="name"><br><br>
            Contact No : <input type="text" name="contactNo"><br><br>
            UserName : <input type="text" name="username"><br><br>
            password : <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Register">
        </form>
            
        </fieldset>
        
        <?php
        
        if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'registration_failed'){
			echo "Registration Failed!";
		}

		if($_REQUEST['msg'] == 'null'){
			echo "Please fill up all information!";
		}
        
        if($_REQUEST['msg'] == 'registration_completed'){
			echo "Registration Completed!";
		}
        
        

		
	}
        
        ?>
        
    </center>
    
</body>
</html>