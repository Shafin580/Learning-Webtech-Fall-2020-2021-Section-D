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

function showAll($conn){
    
    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);
    echo "<table border=1>
    <tr>
    <th>ID</th>
    <th>USERNAME</th>
    <th>PASSWORD</th>
    <th>EMAIL</th>
    <th>TYPE</th>
    <th colspan=2>Action</th>
    </tr>";
    
    while($row = mysqli_fetch_assoc($result)){
        
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['username']."</td>
        <td>".$row['password']."</td>
        <td>".$row['email']."</td>
        <td>".$row['type']."</td>
        <td><a href=updateUsers.php?msg=".$row['id'].">Update</a></td>
        <td><a href=../controller/deleteUsers.php?msg=".$row['id'].">Delete</a></td>
        </tr>";
        
    }
    
    echo "</table>";
    
    
}

?>