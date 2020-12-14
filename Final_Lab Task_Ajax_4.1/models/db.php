<?php

function getConnection($servername, $dbuser, $dbpass, $database){

		$conn = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $conn;
	}

function userValidate($id, $password){
    
    $sql = "select * from users where id = '$id' AND password = '$password'";
    
    $conn = getConnection('localhost', 'root', '', 'task');
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(count($row) > 0){
        
        if($row['user_type']=="User"){
            
           
            return true;
            
        }
        
        elseif($row['user_type']=="Admin"){
            
            
            return true;
            
        }
        
        
    }
    else{
        
        return false;
        
    }
    
}

function userRegistration($id, $name, $password, $email, $userType){
    
    $conn = getConnection('localhost', 'root', '', 'task');
    $sql = "insert into users (id, name, password, email, user_type) values ('$id', '$name', '$password', '$email', '$usertype')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function getUserInformation($username){

		$conn = getConnection('localhost', 'root', '', 'task');
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);

		$userInfo =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($userInfo, $data);
		}

		return $userInfo;
	}

function updatePassword($id, $password){
    
    $conn = getConnection('localhost', 'root', '', 'task');
    $sql = "update users set password = '$password' where id = '$id'";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    
    else{
        
        return false;
        
    }
}

?>