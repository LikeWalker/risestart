<?php
	session_start();
?>
<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
		$query = mysqli_query($con, "UPDATE users SET name='{$_POST['name']}', surname='{$_POST['surname']}', email='{$_POST['email']}', password='{$_POST['password']}' WHERE id='{$_SESSION['id']}'");
	header("Location: profile.php");
?>
