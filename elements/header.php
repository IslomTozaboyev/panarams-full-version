<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/assets/libs/bootstrap-grid/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/libs/owl_carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/libs/aos/aos.css">
    <link rel="stylesheet" href="/assets/libs/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/assets/styles/navfooter.css">
    <link rel="stylesheet" href="/assets/styles/datepicker.css">
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <title><?php echo $title ?></title>
</head>

<body>

    <header>
        <nav class="navigation">
            <a href="/" class="logo" data-aos="fade-down" data-aos-delay="800" data-aos-duration="500">
                <img src="/assets/img/logo.png" alt="logo_panaram's">
            </a>
            <ul class="menu-links" data-aos="fade-down" data-aos-delay="500" data-aos-duration="500">
                <li class="main-page"><a href="/">Главная</a></li>
                <li><a href="/about.php">Обзор</a></li>
                <li><a href="/number.php">Номера</a></li>
                <li><a href="/location.php">Лучшая цена</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#map">Карта</a></li>
                <li><a href="/contact.php">Контакты</a></li>

                <!-- <li><a href="/about.php">О нас</a></li>
                <li><a href="#!">Экскурсии</a></li>
                <li><a href="/gallery.php">Галерея</a></li>
                <li class="order">Бронировать</li> -->
            </ul>
            <div class="extensions">
                <div class="lang" data-aos="fade-down" data-aos-delay="600" data-aos-duration="500">
                    <div class="show-up">Язык<img src="/assets/icons/flag-ru.svg" alt=""></div>
                    <ul class="lang-list">
                        <li><a href="#!">Узбекский</a></li>
                        <li><a href="#!">Английский</a></li>
                        <!-- <li><a href="#!">Немецкий</a></li> -->
                        <!-- <li><a href="#!">Турецкий</a></li> -->
                        <!-- <li><a href="#!">Китайский</a></li>
                        <li><a href="#!">Итальянский</a></li>
                        <li><a href="#!">Испанский</a></li> -->
                    </ul>
                </div>
                <img class="radisson__logo" src="../assets/img/raddisson.png" alt="raddisson">

            </div>
            <div class="mobile-btns" data-aos="fade-down" data-aos-delay="1000" data-aos-duration="500">
                <button class="hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </nav>
    </header>