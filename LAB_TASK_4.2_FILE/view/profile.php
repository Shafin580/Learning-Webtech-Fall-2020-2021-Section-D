<?php
	//include('header.php');
	//include_once('header.php');
	//require('header.php');
	//require_once('../php/header.php');
	session_start();
    if(isset($_REQUEST['submit'])){
        if(!empty($_REQUEST['name']) and !empty($_REQUEST['password'])){
            
            $info = $_REQUEST['name']."|".$_REQUEST['password']."\n";
            $myfile = fopen("register.txt", "w");
            fwrite($myfile, $info);
            fclose($myfile);
            echo "Registration done!";
            
        }
        
        else{
            echo "Error!";
            
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
</head>
<body>

	<h3>Profile Page</h3>
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>
	<br><br>
	
	<img src="../assets/<?=$_SESSION['pic']?>" width="100px" height="100px">
	<br>
	
	<form method="post" action="profile.php">
		Register Name: <input type="text" name="name"><br>
		Register Password <input type="password" name="password"><br>
		<input type="submit" name="submit" value="Submit">
		
	</form>
</body>
</html>
