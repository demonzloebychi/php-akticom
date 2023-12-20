<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Geologica:wght@400;600&family=Manrope:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="preloader" id="page-preloader">
        <div class="loader">
            <span id="load_perc">
                0%
            </span>
        </div>
        <div class="progress-bar">
            <span class="progress" id="progress">
                
            </span>
        </div>
    </div>

    <div class="wrapper">

        <header class="header">
            <div class="container">
                <div class="header__wrapper _anim-items _anim-no-hide _anim-from-top">
                    <a href="/index.php" class="header__logo logo">
                        <img src="/img/Logo.svg" alt="">
                    </a>
                    <div class="burger">
                        <div class="header__burger">
                            <span></span>
                        </div>
                        <div class="header__burger-text">
                            Меню
                        </div>
                    </div>
                </div>

                <div class="header__menu menu">
                    <div class="container">
                        <div class="menu__wrapper">
                            <div class="menu__top">

                                <ul class="menu__list">
                                    <li>
                                        <a href="#" class="menu__link link menu__link-opens">
                                            Услуги
                                        </a>
                                        <ul class="sub-menu__list">
                                            <li>
                                                <a href="#" class="sub-menu__link link">
                                                    Дизайн
                                                </a>
                                                <ul class="sub-sub-menu__list">
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Дизайн сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Дизайн мобильного приложения
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Дизайн корпоративных сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Дизайн интернет-магазина
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="sub-menu__link link">
                                                    Разработка
                                                </a>
                                                <ul class="sub-sub-menu__list">
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Разработка сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Разработка мобильного приложения
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Разработка корпоративных сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Разработка интернет-магазина
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="sub-menu__link link">
                                                    Аналитика
                                                </a>
                                                <ul class="sub-sub-menu__list">
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Аналитика сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Аналитика мобильного приложения
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Аналитика корпоративных сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Аналитика интернет-магазина
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="sub-menu__link link">
                                                    Продвижение
                                                </a>
                                                <ul class="sub-sub-menu__list">
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Продвижение сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Продвижение мобильного приложения
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Продвижение корпоративных сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Продвижение интернет-магазина
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="sub-menu__link link">
                                                    Реклама
                                                </a>
                                                <ul class="sub-sub-menu__list">
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Реклама сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Реклама мобильного приложения
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Реклама корпоративных сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Реклама интернет-магазина
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="sub-menu__link link">
                                                    Техподдержка
                                                </a>
                                                <ul class="sub-sub-menu__list">
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Техподдержка сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Техподдержка мобильного приложения
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Техподдержка корпоративных сайтов
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="" class="sub-sub-menu__link link">
                                                            Техподдержка интернет-магазина
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link link">
                                            КЕЙСЫ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link link">
                                            БЛОГ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="menu__link link">
                                            КОНТАКТЫ
                                        </a>
                                    </li>
                                </ul>


                            </div>
                            <div class="menu__bottom">
                                <ul class="bottom-menu__list">
                                    <li>
                                        <a href="" class="bottom-menu__link link">
                                            +7 (846) 313-23-20
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="bottom-menu__link link">
                                            +7 (846) 313-23-20
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="bottom-menu__link link">
                                            mail@akticom.ru
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="bottom-menu__btn green-btn">
                                            Обсудить проект
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>