<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlyCoffee-shop</title>
    <link rel="icon" href="/img/bg__shop.jpg">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>

    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header-lg">
                    <div class="header__OnlyCoffee">
                        <a href="#">
                            <img src="img/OnlyCoffee.png" alt="ЗДесь должен быть логотип компании">
                        </a>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li><a href="/index.html" class="">Информация</a></li>
                            <li><a href="/index-shop.php" class="">Заказ</a></li>
                            <li><a href="#connect" class="">Контакты</a></li>
                            <li><a href="tel:375291991321 "> +375 (29) 199 13 21 </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="shop ">
        <div class="shop__bg ">
            <div class="shop__up-img ">
                <img src="/img/slider-fon-one.jpg " alt="тут должна быть картинка " width="100% " height="160px ">
                <div class="container ">
                    <div class="shop__products ">
                        <img src="/img/starbucks.png " class="shop__srarbucks " alt="кофе старбакс ">

                        <img src="/img/mokka.png " class="shop__mokka " alt="кофе старбакс ">

                        <img src="/img/syrup.png " class="shop__syrup " alt="кофе старбакс ">
                    </div>

                    <div class="shop__name ">

                        <a class="starbucks ">Кофе sratbucks</a>
                        <a class="mokka ">Кофе mokka</a>
                        <a class="syrup ">Сироп</a>

                    </div>
                </div>
            </div>

            <div class="button__shop">
                <span data-fancybox data-src="#modal" href="javascript:;">  Подать заявку на рассмотрение </span>
            </div>


            <div class="photo_shop">
                <img src="/img/shop_img.png" alt="красивая картинка">
            </div>

        </div>

    </section>
    <footer class="footer ">
        <div class="footer__back ">
            <div class="container ">
                <div id="connect" class="footer__title">
                    Связаться с нами
                </div>

                <div class="footer__map ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.7262078502918!2d30.405371815858835!3d53.88329528009507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46d05270953ab0ad%3A0x802574ec68cc66b6!2z0JLQuNGC0LXQsdGB0LrQuNC5INC_0YDQvtGB0L_QtdC60YIgNiwg0JzQvtCz0LjQu9GR0LI!5e0!3m2!1sru!2sby!4v1637344149380!5m2!1sru!2sby "
                        width="1150px " height="250px " style="border:0; " allowfullscreen=" " loading="lazy "></iframe>
                </div>

            </div>
        </div>
    </footer>
    </section>

    <div id="modal">
        <form action="index-shop.php" method="POST">
            <input type="text" name="fio" placeholder="Укажите ФИО">
            <input type="text" name="email" placeholder="Укажите e-mail">
            <input type="text" name="phone" placeholder="Ваш телефон">
            <input type="submit" value="Отправить">
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js "></script>
    <script src="js/jquery.fancybox.min.js "></script>
    <script src="js/jquery.formstyler.min.js "></script>
    <script src="js/slick.min.js "></script>
    <script src="js/main.js "></script>



</body>

</html>