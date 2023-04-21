<?php 
	define('__ROOT__', dirname(dirname(dirname(__FILE__))));
	require_once __ROOT__."\backend\class.php";
if(isset($_POST['login']))
{
	if(!($_POST['username']==null) || !($_POST['password']==null)){
		$user_unsafe=$_POST['username'];
		$password_unsafe=$_POST['password'];

		$user_safe = $this->$connProduct->real_escape_string($user_unsafe);
		$password_safe = $this->$connProduct->real_escape_string($password_unsafe);

		$sqlString = "SELECT `username`, `password` FROM `user` WHERE `username` = $user_safe";
		$resutl = $this->$connProduct->query($sqlString);
		$userDB = $resutl->fetch_assoc();

		$name = $userDB['username'];
		$password = $userDB['password'];
				
		if ($name == $user && bin2hex($password)==$pass) {	
			$_SESSION['userLogiedInStatus']=true;
			$_SESSION['userLogidIn']=$user;	
			$_SESSION['username']=$pass;
			
			echo "POST username: ".$user_unsafe;
			echo "POST password: ".$password_unsafe;
			echo "POST safe username: ".$user_safe;
			echo "POST safe password: ".$password_safe;
			echo "SQL username: ".$name;
			echo "SQL password: ".$password;
			echo "SQL password (decrypted): ".bin2hex($password);

		} 
		else{
			// echo "<script type='text/javascript'>alert('Invalid Username or Password!');
			// document.location='login.php'</script>";
			echo "POST username: ".$user_unsafe;
			echo "POST password: ".$pass_unsafe;
			echo "POST safe username: ".$user;
			echo "POST safe password: ".$pass;
			echo "SQL username: ".$name;
			echo "SQL password: ".$password;
			echo "SQL password (decrypted): ".bin2hex($password);

		}
	}
}
?>

