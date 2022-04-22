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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<!-- header start -->
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
	<header class="header">
		<div class="wrapper">
			<div class="header__wrapper">
				<div class="header__logo">
					<a href="full.php" class="header__logo-link">
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
						<li class="header__item">
							<a href="login.php" style="margin-left: 75px;" class="header__link"><?php echo $stroka['name']?></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- intro start -->
	<main class="main">
		<section class="profile">
			<div class="wrapper__profile">
				<div class="col-7 pt-3">
			<div class="mt-1 rounded bg-light col-12 border-bottom " >
				<h5> Редактирование <!--Здесь вывести имя и фамилию авторизованного пользователя--></h5>
				<div class="border-top">
					<form method="POST" action="redact_all.php">
					<div class="row ml-0 col-6 mx-auto">
						<h3>имя:</h3>
						<input type="" name="name" value="<?php echo $stroka['name'];
						?>">
					</div>
					<div class="row ml-0 col-7 mx-auto">
						<h3>Фамилия:</h3>
						<input type="" name="surname" value="<?php echo $stroka['surname'];
						?>">
					</div>
					<div class="row ml-0 col-6 mx-auto">
						<h3>Почта:</h3>
						<input type="" name="email" value="<?php echo $stroka['email'];
						?>">
					</div>
					<div class="row ml-0 col-7 mx-auto">
						<h3>Пароль:</h3>
						<input type="" name="password" value="<?php echo $stroka['password'];
						?>">
					</div>
					<button class="mx-auto">save</button>
					</form>
				</div>
			</div>
		</div>
				</div>
			</div>
		</section>
	<!-- intro end -->
	<!-- contacts end -->
	</main>
	<script type="text/javascript">
		
	</script>
</body>
</html>