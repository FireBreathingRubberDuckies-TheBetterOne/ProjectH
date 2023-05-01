<?php 
	define('__ROOT__', dirname(dirname(dirname(__FILE__))));
	require_once __ROOT__."\backend\class.php";
if(isset($_POST['login']))
{
	if(!($_POST['username']==null) || !($_POST['password']==null)){

		$user_unsafe=$_POST['username'];
		$password_unsafe=$_POST['password'];

		if($userClass->loginCheck($user_unsafe, $password_unsafe)){
			$_SESSION['userLogidInStatus']=true;
			$_SESSION['userLogidIn'][0]=$user_unsafe;
		 header("Location: http://localhost/ProjectH/index.php");
		}
		else{
			$_SESSION['userLogidInStatus']=false;
			echo "Sikertelen bejelentekzés";
		}
	}
}
?>

