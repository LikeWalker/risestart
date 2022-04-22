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
				<div class="profile__wrapper">
					<div class="profile__text">
						<form action="add.php" method="POST">
							<h1 class="profile__title">
									Личный кабинет
							</h1>
								<div class="profile__info">
									<div class="profile__card">
										<div class="profile__pic">
											<img src="img/avatar-0.png" class="profile__icon">
										</div>
									</div>
									<div class="profile__card">
										<div class="profile__card__text">
											<p class="profile__text">
												Фамилия, Имя - <?php echo $stroka['surname'];  ?> &ensp; <?php echo $stroka['name'];?>
											</p>
											<p class="profile__text">
												Почта - <?php echo $stroka['email'];  ?>
											</p>
										</div>
									</div>
									<div class="profile__card">
										<div class="profile__link">
											<a href="redact.php" class="profile__link__text">Изменить</a>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="profile__text">
							<a href="add_project.php" class="profile__title">
								Добавить проект
							</a>
						<?php
							$connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'republic');
							$text = "SELECT * FROM projects";
							$query = mysqli_query($connect, $text);
							$line = $query->fetch_assoc();
							for ($i=0; $i < $query->num_rows; $i++) { 
								$line = $query->fetch_assoc();
						?>
							<div class="profile__info">
								<div class="profile__card">
									<div class="profile__card__text">
										<p class="profile__text">
											Название - <?php echo $line['name'];  ?>
										</p>
										<p class="profile__text">
											Категория - <?php echo $line['category'];  ?>
										</p>
										<p class="profile__text">
											Цена - <?php echo $line['price'];  ?>
										</p>
										<p class="profile__text">
											Описание - <?php echo $line['description'];  ?>
										</p>
									</div>
								</div>
								<div class="profile__card">
							
								</div>
							</div>
						<?php
							}
						?>
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