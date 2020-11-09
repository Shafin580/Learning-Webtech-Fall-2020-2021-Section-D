<?php
	//session_start();

	if(isset($_REQUEST['submit'])){
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
        $myfile = fopen("../view/register.txt", "r");
        $readfile = fread($myfile, filesize("../view/register.txt"));
        $user_info = explode("|", $readfile);
		if(empty($username) || empty($password)){
			//echo "null submission";
            
			header('location: ../view/login.php?msg=null');
		}else{

            
			if($user_info[0] == $username and $user_info[1] == $password){
				//$flag = true;
				//$_SESSION['flag'] = "true";
				//$_SESSION['username'] = $username;

				setcookie('flag', 'alamin', time()+3600, '/');
				//setcookie('rm', 'ok', time()+3600, '/');
				//setcookie('uname', 'alamin', time()+3600, '/');

				header('location: ../view/home.php');
			}else{
				header('location: ../view/login.php?msg=invalid');
			}
		}
	}else{
		header('location: ../view/login.php');
	}
	

?>