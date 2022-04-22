<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'republic'); 
	$text = "INSERT INTO users (id, name, surname, email, password)  VALUES ('{$_POST['id']}', '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['email']}', '{$_POST['password']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: login.php");
?>