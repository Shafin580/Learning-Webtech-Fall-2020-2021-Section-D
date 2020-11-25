<?php

function getConnection(){
		$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		return $conn;
	}

function checkUser($conn, $username, $password)
 {
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
    
    if(count($row) > 0){
        
        if($row['type']=='admin'){
            setcookie("admin", "flag", time()+600, '/');
            header('location: ../view/admin_home.php');
            
        }
        
        elseif($row['type']=='client'){
            setcookie("client", "flag", time()+600, '/');
            header('location: ../view/client_home.php');
            
        }
        
    }
    
    else{
        
        header('location: ../index.php?msg=invalid_cred');
        
    }
 }

?>