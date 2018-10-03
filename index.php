<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animated.css">
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
	<script type="text/javascript" src="js/js.js"></script>
	<link rel="stylesheet" href="css/slick.css">
	<script src="js/slick.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>
	<div class="nav-background hidden-mobile">
	<nav class="nav">
		<div class="nav-box"><a href ="#">О КОМПАНИИ</a></div>
		<div class="nav-box"><a href ="#numbers">ПРЕИМУЩЕСТВА</a></div>
		<div class="nav-box"><a href ="#products">ПРОДУКЦИЯ</a></div>
		<div class="nav-box"><a href ="#form2">СКЛАД</a></div>
		<div class="nav-box"><a href ="#produce">ПРОИЗВОДСТВО</a></div>
		<div class="nav-box"><a href ="#clients">НАШИ КЛИЕНТЫ</a></div>
		<div class="nav-box"><a href ="#review">СЕРТИФИКАТЫ</a></div>
		<div class="nav-box"><a href ="#">ОТЗЫВЫ</a></div>
		<div class="nav-box"><a href ="#">КОНТАКТЫ</a></div>
	</nav>
	</div>
	<header class="header">
		<div class="header__logo">
		</div>
		<div class="header-contacts">
			<div class="header-contacts__phones">
				<div class="header-contacts__phone1">8 (347) 271-54-28</div>
				<div class="header-contacts__phone2">8 (937) 363-30-00</div>
			</div>
			<button class="header-contacts__button button"><img src="img/tube.png" alt=""><p class="hidden-mobile"> Заказать звонок</p></button>
		</div>
	</header>
	<div class="background-main">
		<div class="main">
			<div class="main-img animate hidden-mobile" data-wow-delay="3.4s">
				<img src="img/boxs.png" alt="">
			</div>
			<div class="main-text">
				<div class="main-text-title">
					<h1>Производство упаковки из гофрокартона</h1>
					<p>с доставкой по всей России</p>
				</div>
				<div class="main-text-form">
					<p class="main-text-form-subtitle">Получите индивидуальное предложение<br>
					на производство и поставку гофропродукции <br><span>Образы упаковки бесплатно</span></p>
					<div class="main-text-form-phone">
						<input class="main-text-form-phone-number" type="text" placeholder="Введите номер телефона">
						<button type="submit" class="button main-text-form-phone-button">Оставить заявку</button>
					</div>
					<p class="main-text-form-phone-small">*Минимальный заказ 500шт</p>
				</div>
			</div>
		</div>
	</div>

	<div class="overlay">
	<div class="popup">
		<div class="popup-title">Форма обратной связи</div>
		<!-- /.popup-title -->
		<div class="popup-close">&times;</div>
		<!-- /.popup-close -->
		<div class="popup-form">
			<form action="smart.php" class ="main-form" method="POST">
				<div class="popup-form-header">
					<p>Получите индивидуальное предложение</p>
					<span> на производство и поставку изделий</span>
				</div>
				<label for="phone" class="popup-form__label">
					Введите ваш номер телефона
				</label>
				<div class = "popup-form-center">
					<input type="tel"class="popup-form-center__input" name="phone" required>
					<button class="button popup-form-center__btn">
						Оставить заявку!
				</button>
				</div>
				<div class="popup-form__note">
					*Минимальный заказ 500шт.
				</div>
			</form>
	<div class="container"></div>
		</div>
		<!-- /.popup-form -->
	</div>
	<!-- /.popup -->
</div>
<!-- /.overlay -->
<div class="bckg" id="numbers">
	<div class="numbers">
		<div class="numbers-block">
			<div class="numbers-block-title">5 лет</div>
			<div class="numbers-block-subtitle">На рынке изделий из гофрокартона</div>
		</div>
		<div class="numbers-block mgn-top">
			<div class="numbers-block-title">до 5 000 000 м<sup>2</sup></div>
			<div class="numbers-block-subtitle">Ежемесячный объем производства гофрокартона</div>
		</div>
		<div class="numbers-block">
			<div class="numbers-block-title">4 000 м2</div>
			<div class="numbers-block-subtitle">Площадь склада</div>
		</div>
	</div>
	<div class="features">
		<div class="features-block animated fadeInUp">
			<div class="features-block-img"><p><img src="img/img1.png" alt=""></p></div>
			<div class="features-block-text">
				<div class="features-block-text-title">Производство</div>
				<div class="features-block-text-subtitle">4 технологические линии спо- собны выполнить любой заказ любой сложности</div>
			</div>
		</div>
		<div class="features-block wow fadeInUp" data-wow-delay="0.2s">
			<div class="features-block-img"><p><img src="img/img2.png" alt=""></p></div>
			<div class="features-block-text">
				<div class="features-block-text-title">Бесплатные образцы</div>
				<div class="features-block-text-subtitle">Бесплатно делаем образцы гофроупаковки - это помогает заранее увидеть упаковку</div>
			</div>
		</div>
		<div class="features-block wow fadeInUp" data-wow-delay="0.4s">
			<div class="features-block-img"><p><img src="img/img3.png" alt=""></p></div>
			<div class="features-block-text">
				<div class="features-block-text-title">Стабильное качество</div>
				<div class="features-block-text-subtitle">Собственная лаборатория контролирует качество на каждом этапе производства</div>
			</div>
		</div>
		<div class="features-block wow fadeInUp" data-wow-delay="0.6s">
			<div class="features-block-img"><p><img src="img/img4.png" alt=""></p></div>
			<div class="features-block-text">
				<div class="features-block-text-title">Страховой запас</div>
				<div class="features-block-text-subtitle">Можем хранить запас гофропродукции на своих складах и поставлять его партиями</div>
			</div>
		</div>
		<div class="features-block wow fadeInUp" data-wow-delay="0.8s">
			<div class="features-block-img"><p><img src="img/img5.png" alt=""></p></div>
			<div class="features-block-text">
				<div class="features-block-text-title">Флексопечать</div>
				<div class="features-block-text-subtitle">Возможно нанесение вашего  логотипа, текста или манипуляционных знаков</div>
			</div>
		</div>
		<div class="features-block wow fadeInUp" data-wow-delay="1s">
			<div class="features-block-img"><img src="img/img6.png" alt=""></p></div>
			<div class="features-block-text">
				<div class="features-block-text-title">Гидрофобные добавки</div>
				<div class="features-block-text-subtitle">На производстве реализована технология, которая позволяет гофрокартону стать прочнее</div>
			</div>
		</div>
	</div>
</div>
<div class="products-logo" id="products">НАША ПРОДУКЦИЯ</div>
<div class="products-img"><p><img src="img/line.png" alt=""></p></div>
<div class="products">
	<div class="products-block">
		<div class="products-block-img"><img class="mobile-products-block-img-img" src="img/box1.png" alt=""></div>
		<div class="products-block-title">Гофрокороб 4-х клапанный</div>
		<div class="products-block-button">
			<button class="products-block-button-o">Подробнее</button>
			<button class="button">Получить расчет</button>
		</div>
	</div>
	<div class="products-block">
		<div class="products-block-img"><img class="mobile-products-block-img-img" src="img/box2.png" alt=""></div>
		<div class="products-block-title">Гофролоток</div>
		<div class="products-block-button">
			<button class="products-block-button-o">Подробнее</button>
			<button class="button">Получить расчет</button>
		</div>
	</div>
	<div class="products-block">
		<div class="products-block-img"><img class="mobile-products-block-img-img" src="img/box3.png" alt=""></div>
		<div class="products-block-title">Гофрокороб самосборный (сложная высечка)</div>
		<div class="products-block-button">
			<button class="products-block-button-o">Подробнее</button>
			<button class="button">Получить расчет</button>
		</div>
	</div>
	<div class="products-block">
		<div class="products-block-img"><img class="mobile-products-block-img-img" src="img/box4.png" alt=""></div>
		<div class="products-block-title">Листовой гофрокартон</div>
		<div class="products-block-button">
			<button class="products-block-button-o">Подробнее</button>
			<button class="button">Получить расчет</button>
		</div>
	</div>
</div>
<div class="background-form2"></div>
<!-- /.background-form2 -->
<div class="form2" id="form2">
	<div class="form2-border">
		<div class="form2-border-header">
					<p>Получите индивидуальное предложение</p>
					<span> на производство и поставку изделий</span>
			</div>
				<label for="phone" class="form2-border__label">
					Введите ваш номер телефона
				</label>
				<div class = "form2-border-center">
					<input type="tel"class="form2-border-center__input" name="phone" required>
					<button class="form2-border-center__btn">
						Оставить заявку!
				</button>
				</div>
				<div class="form2-border__note">
					*Минимальный заказ 500шт.
				</div>
	</div>
	<!-- /.form2-border -->
</div>
<!-- /.form2 -->
<div class="produce" id="produce">
	<div class="produce-slider">
		<div class="produce-slider-main hidden-mobile"><img class ="produce-slider-main-img"src="img/p-img1.png" alt=""></div>
		<!-- /.produce-slider-main -->
		<div class="produce-slider-incidental">
			<button class="produce-slider-incidental-arrow produce-slider-incidental-arrow-left"><img src="img/arrow-l.png" alt=""></button>
			<!-- /.produce-slider-incidental-arrow produce-slider-incidental-arrow-left -->
			<div class="produce-slider-incidental-img hidden-mobile"><img src="img/p-img2.png" alt=""></div>
			<!-- /.produce-slider-incidental-img -->
			<div class="produce-slider-incidental-img"><img class="produce-slider-incidental-img-img" src="img/p-img3.png" alt=""></div>
			<!-- /.produce-slider-incidental-img -->
			<div class="produce-slider-incidental-img hidden-mobile"><img src="img/p-img4.png" alt=""></div>
			<!-- /.produce-slider-incidental-img -->
			<div class="produce-slider-incidental-img hidden-mobile"><img src="img/p-img5.png" alt=""></div>
			<!-- /.produce-slider-incidental-img -->
			<button class="produce-slider-incidental-arrow produce-slider-incidental-arrow-right"><img src="img/arrow-r.png" alt=""></button>
			<!-- /.produce-slider-incidental-arrow produce-slider-incidental-arrow-right -->
		</div>
		<!-- /.produce-slider-incidental -->
	</div>
	<!-- /.produce-slider -->
	<div class="produce-text">
		<div class="produce-text-title">Производство</div>
		<!-- /.produce-text-title -->
		<div class="produce-text-subtitle">Современное оборудование позволяет производить до 5 миллионов квадратных метров гофрокартона ежемесячно. Гофрокороба и лотки производятся по ГОСТу или чертежам заказчика.<br><br>
	Досконально прорабатываем конструкции коробов и составы сырья, учитывая условия хранения, транспортировки и производства вашей продукции.<br><br>
	Возможно нанесение цветной флексопечати на поверхность коробов.</div>
		<!-- /.produce-text-subtitle -->
	</div>
	<!-- /.produce-text -->
</div>
<!-- /.products -->
<div class="customers-title" id="clients">НАШИ КЛИЕНТЫ</div>
<div class="customers-img"><img src="img/line.png" alt=""></div>
<div class="customers">
	<div class="customers-box customers-image1"></div>
	<div class="customers-box customers-image2"></div>
	<div class="customers-box customers-image3"></div>
	<div class="customers-box customers-image4"></div>
	<div class="customers-box customers-image5"></div>
	<div class="customers-box customers-image6"></div>
	<div class="customers-box customers-image7"></div>
	<div class="customers-box customers-image8"></div>
	<div class="customers-box customers-image9"></div>
	<div class="customers-box customers-image10"></div>
	<div class="customers-box customers-image11"></div>
	<div class="customers-box customers-image12"></div>
</div>
<div class="background-review" id="review">
	<div class="review">
		<div class="review-title">ОТЗЫВЫ О СОТРУДНИЧЕСТВЕ</div>
		<div class="review-img"><img src="img/line.png" alt=""></div>
		<div class="review-slider">
			<button class="review-slider-arror-l"><img src="img/r-arrow-l.png" alt=""></button>
			<div class="review-slider-img"><img src="img/r-img1.png" alt=""></div>
			<div class="review-slider-img hidden-mobile"><img src="img/r-img2.png" alt=""></div>
			<div class="review-slider-img hidden-mobile"><img src="img/r-img3.png " alt=""></div>
			<button class="review-slider-arror-r"><img src="img/r-arrow-r.png" alt=""></button>
		</div>
	</div>
</div>
<section class="contacts">
	<!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9e9984ce39efed3187a7f031e2b9e21496cdea8dc89f4dd911612f7bbaf069c5&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=false"></script> -->
	<div id="map" class="map"></div>
	<div class="contacts-block">
		<div class="contacts-title">Контакты</div>
		<div class="contacts-block__adress">
			<div class="contacts-block__img hidden-mobile">
				<img class="hidden-mobile"src="img/cont-img1.png " alt="">
			</div>
			<div class="contacts-block__text">
				<span class="contacts-block__title">Адрес офиса</span>
				г. Уфа, Проспект октября, 46
				<span class="contacts-block__title">Адрес склада</span>
					г. Уфа, ул. Майкопская, 65/2
			</div>
		</div>
		<!-- /.contacts-block__adress -->
		<div class="contacts-block__phone">
			<div class="contacts-block__img hidden-mobile">
				<img src="img/cont-img2.png" class ="hidden-mobile" alt="">
			</div>
			<div class="contacts-block__text">
				<span class="contacts-block__title">Тел. отдела продаж:</span>
				8 (347) 271-54-28<br>
				8 (937) 363-30-00
			</div>
		</div>
		<div class="contacts-block__cta">
			<button class="button">Заказать звонок</button>
		</div>
		<div class="contacts-block__mail">
			<div class="contacts-block__img">
				<img class ="hidden-mobile"src="img/cont-img3.png" class ="hidden-mobile" alt="">
			</div>
			<div class="contacts-block__text">
				<span class="contacts-block__title">Е-mail</span>urals.karton@gmail.com
			</div>
		</div>
	</div>
</section>
<!-- /.contacts -->
<footer class="footer">
	<div class="footer-title">
		© www.gofra-ural.ru 2016, все права защищены
	</div>
</footer>
<script>
	$(document).ready(function(){
		$('.header-contacts__button').on("click",function(){
			$('.overlay').show();
		});
		$('.popup-close').on("click",function(){
			$('.overlay').hide();
		});
	});
</script>
<script src="js/wow.min.js"></script>
<script type="text/javascript">new WOW().init();</script>
<script type="text/javascript">
	$('a[href^="#"]').click(function () {
	var target = $(this).attr('href');
	$('html, body').animate({scrollTop: $(target).offset().top - 50 }, 800);
	return false;
	});
	</script>
</body>
</html>
