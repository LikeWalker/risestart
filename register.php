<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,500,500i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,500i" rel="stylesheet">
	<title>Republic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<!-- header start -->
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','hackaton');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
	<header class="header">
		<div class="wrapper">
			<div class="header__wrapper">
				<div class="header__logo">
					<a href="main.php" class="header__logo-link">
						<img src="img/Logo.png" class="header__logo-link-picture">
						</img>
					</a>
				</div>
				<nav class="header__nav">
					<ul class="header__list">
						<li class="header__item">
							<a href="info.php" class="header__link">О сайте</a>
						</li>
						<li class="header__item">
							<a href="projects.php" class="header__link">Все проекты</a>
						</li>
						<li style="opacity: 0;" class="header__item">
							<a href="login.php" class="header__link">Личный кабинет</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- intro start -->
	<main class="main">
		<section class="login">
			<div class="wrapper__login">
				<div class="login__wrapper">
					<div class="login__text">
						<form action="add.php" method="POST">
							<h1 class="login__title">
								Регистрация
							</h1>
							<p class="login__subtitle">
								Ваше имя
							</p>
							<input class="login__input" type="" name="name" placeholder="Имя">
							<p class="login__subtitle">
								Ваша фамилия
							</p>
							<input class="login__input" type="" name="surname" placeholder="Фамилия">
							<p class="login__subtitle">
								Ваша почта
							</p>
							<input class="login__input" type="" name="email" placeholder="Почта">
							<p class="login__subtitle">
								Ваш пароль
							</p>
							<input class="login__input" type="password" name="password" placeholder="Пароль">
							<div class="login__button__register">
								<button class="login__button">
									Зарегестрироваться
								</button>
							</div>
						</form>
					</div>
				</div>	
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
</body>
</html>