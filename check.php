<?php 
	session_start();//начинаем сессию пользователя
	$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
	$query = mysqli_query($con, "SELECT * FROM users WHERE (email='{$_POST['email']}' AND password='{$_POST['password']}')");
	$stroka = $query->fetch_assoc();
	$num = mysqli_num_rows($query);
	if($num>0){
		$_SESSION['id'] = $stroka['id'];// сохранили глобально ID пользователя который авторизовался
		$_SESSION['name'] = $stroka['name'];
		$_SESSION['surname'] = $stroka['surname'];
		$_SESSION['email'] = $stroka['email'];
		$_SESSION['password'] = $stroka['password'];
		header("Location: full.php");
	} else{
		header("Location: login.php");
	}
?>
