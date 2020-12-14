<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
    
    <br><br><br><br><br><br>
    
    <center>
        
        <fieldset style="width:500px;">
            
            <legend><h1>Registration</h1></legend>
            
            <form>
                
                Id <br>
                <input type="text" name="id"><br>
                Password <br>
                <input type="password" name="password"><br>
                Confirm password <br>
                <input type="password" name="cpassword"><br>
                Name <br>
                <input type="text" name="name"><br>
                Email <br>
                <input type="email" name="email"><br>
                
                User Type [User/Admin] <br>
                
                <select name="userType" >
				    <option value="User">User</option>
				    <option value="Admin">Admin</option>
				
			    </select>
               
               <hr>
               
               <input type="submit" name="submit" value="Register" onclick="registration()"> <a href="../index.php">Login</a> <br>
                
            </form>
            
        </fieldset>
        
        <div id="result"></div>
        
        <script type="text/javascript" src="../script/script.js"></script>
        
    </center>
    
</body>
</html>