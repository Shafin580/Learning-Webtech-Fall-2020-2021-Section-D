<?php


require_once('db.php');

function userRegistration($name, $contactNo, $username, $password){
    
    $conn = getConnection('localhost', 'root', '', 'shop');
    $sql = "insert into employee (employee_name, contact_no, username, password) values ('$name', '$contactNo', '$username', '$password')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function validateUser($username, $password){
    
    $conn = getConnection('localhost', 'root', '', 'shop');
    $sql = "select * from employee where username = '$username' and password = '$password'";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function searchUser($username){
    
    $conn = getConnection('localhost', 'root', '', 'shop');
    $sql = "select * from employee where username = '$username'";
    $user = [];
    $result = mysqli_query($conn, $sql);
        
    
        
    $data = mysqli_fetch_assoc($result);
    
    array_push($user, $data);
    
    return $user;
        
    
    
   
   
    
}
    
}




?>