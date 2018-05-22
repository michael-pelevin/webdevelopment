<?php

require_once 'db_conn.php';
 
$login=trim($_POST['login']);
$pass=trim($_POST['pass']);


if(!empty($login) && !empty($pass) ){
	$sql = 'SELECT login,pass FROM without_reg WHERE login =:login';
	$params = [':login' => $login];
	
	$stmt = $mysqli->prepare($sql);
	$stmt->execute($params);
	
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	if($user){
		if(password_verify($pass, $user->pass)){
			$_SESSION['user_login']=$user->login;
			header('Location: ../index.php');
		}else{
			echo 'Wrong password or login';
		}
	}else{
			echo 'Wrong password or login';

}
}else{
			echo 'Please, fill in all the fields!';
}

?>