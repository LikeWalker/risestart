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
	<?php
		$con = mysqli_connect('127.0.0.1:3306', 'root','','republic');
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
	?>
	<!-- header start -->
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
						<li class="header__item">
							<a href="profile.php" style="margin-left: 75px;" class="header__link"><?php echo $stroka['name']?></a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- header end -->
	<!-- services start !-->
		<div class="wrapper">
			<h2 class="service__title section__title" style="margin-top: 130px;">
				Все проекты
			</h2>
			<div class="service__cards">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/plastic.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Очистка природы
						</h1>
						<p class="service__card__desc">
							Очистка природы от мусора
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">82 520 руб. </p>
							<p class="service__card__price1">из 180 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/homeless.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Помощь бездомным
						</h1>
						<p class="service__card__desc">
							Помощь людям получить ночлег, одежду и еду
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">68 452 руб.  </p>
							<p class="service__card__price1">из 240 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/food.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Служба доставки продуктов
						</h1>
						<p class="service__card__desc">
							Создание местной довтавки продуктов в г. Якутск
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">23 620 руб.  </p>
							<p class="service__card__price1">из 80 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
			</div>
			<div class="service__cards">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/student.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Онлайн-курс по каллиграфии
						</h1>
						<p class="service__card__desc">
							Создание онлайн курсов по каллиграфии
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">6 120 руб.  </p>
							<p class="service__card__price1">из 20 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/mustar.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Медиазона - Mustar
						</h1>
						<p class="service__card__desc">
							Продвижение якутского языка
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">153 473 руб. </p>
							<p class="service__card__price1">из 590 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/cafe.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Кафе на колесах
						</h1>
						<p class="service__card__desc">
							Создание фуд-трека (мини-кафе на колесах), с быстрой едой
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">32 600 руб.   </p>
							<p class="service__card__price1">из 160 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
			</div>
			<div class="service__cards">
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/eduard.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Пусть Эдуард встанет на ноги
						</h1>
						<p class="service__card__desc">
							Помогите купить устройство
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">19 630 руб.  </p>
							<p class="service__card__price1">из 24 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/school.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Гоша хочет пойти в школу
						</h1>
						<p class="service__card__desc">
							Помогаем оплатить услуги логопеда
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">12 050 руб.  </p>
							<p class="service__card__price1">из 68 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
				<div class="service__card">
					<div class="service__card__pic">
						<img src="img/blind.png" class="service__card__thumb">
						<h1 class="service__card__title">
							Женя хочет увидеть маму и папу
						</h1>
						<p class="service__card__desc">
							Помогаем оплатить операцию, чтобы девочка смогла видеть
						</p>
						<div class="service__card__prices">
							<p class="service__card__price">26 518 руб.  </p>
							<p class="service__card__price1">из 270 000 руб.</p>
						</div>
						<a href="#!" class="service__card__more">&emsp;&emsp;Помочь&emsp;&emsp;</a>
					</div>
				</div>
			</div>
		</div>

	<!-- service end-->
	</main>
</body>
</html>