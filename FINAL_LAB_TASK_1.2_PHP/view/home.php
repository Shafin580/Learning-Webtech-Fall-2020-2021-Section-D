<?php

require_once('../models/userService.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    
    <br><br><br><br><br><br><br>
    
    <center>
        
        <h1>Home</h1>
        
        <form action="home.php" method="post">
            
            <input type="submit" name="showAll" value="Show all employee"><br><br>
            <input type="submit" name="search" value="Search User">
            <input type="text" name="id" placeholder="username">
            
        </form>
        
        <?php
        
        if(isset($_REQUEST['search'])){
            
            if(!empty($_REQUEST['username'])){
                
                $user = searchUser($_REQUEST['username']);
                
                echo "<table border=1>
                <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>EMAIL</th>

                </tr>";



                    echo "<tr>
                    <td>".$user['employee_name']."</td>
                    <td>".$user['contact_no']."</td>
                    <td>".$user['username']."</td>
                    <td>".$user['password']."</td>
                    </tr>";



                echo "</table>";
                
            }
            
            else{
                
                echo "Please give username!";
                
            }
            
        }
        
        ?>
        
    </center>
    
</body>
</html>