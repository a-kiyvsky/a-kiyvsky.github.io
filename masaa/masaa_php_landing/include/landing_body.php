<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>15 бесплатных уроков моды и стиля от экспертов индустрии красоты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta property="og:image" content="favicon.png">
</head>
<body>

<!-- Header -->

<header>
    <div class="container">
        <a href="http://masaa.ru/" target="_blank"><img src="./img/logo.png" alt="Masaa" class="logo" /></a>
        <h1>15 бесплатных уроков моды и стиля<br>от экспертов индустрии красоты</h1>
    </div>
    <div class="row">
        <div class="container">
            <div class="header-content">
                <p>Начните свое преображение уже сегодня</p>
                <form class="header-form" action="" method="post">
                    <input type="email" class="header-form_name" name="email" value="<?= isset($client) ? $client->getEmail() : ''; ?>" placeholder="Введите ваш email">
                    <input type="hidden" name="identifier" value="<?=$project;?>">
                    <input type="hidden" name="partner" value="<?=$partner;?>">
                    <? if(isset($client)): ?>
                        <input type="hidden" name="client" value="<?=$client->getId();?>">
                        <input type="hidden" name="redirection_link" value="<?=$client->getRedirectionLink();?>">
                    <? endif; ?>
                    <input type="submit" class="header-form_submit" name="name" value="Получить бесплатно">
                    <p>Мастер классы сразу же будут высланы на Вашу почту!</p>
                </form>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="timer">
            <p>Предложение действительно еще:</p>
            <div class="timer_blocks">
                <div class="timer_block">
                    <div class="time_text hours">00</div>
                    <div class="time_description">Часов</div>
                </div>
                <div class="timer_block">
                    <div class="time_text minutes">08</div>
                    <div class="time_description">Минут</div>
                </div>
                <div class="timer_block">
                    <div class="time_text seconds">46</div>
                    <div class="time_description">Секунд</div>
                </div>
            </div>
        </div>
    </div>
    <div class="ribbon-wrapper-green"><div class="ribbon-green"><a class="open_modal" href="">Нам 3 года! <br> Успейте получить подарки!</a></div></div>
</header>

<!-- Result-->

<section class="result">
    <div class="container">
        <h2 class="mobile">Что входит в мастер-классы?</h2>
        <div class="video">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/f3CzNfOLY3c" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="results">
            <h2 class="pc">Что вы получаете?</h2>
            <ul class="bullets">
                <li class="bullet_text icon_0">Рекомендации по составлению базового гардероба на все случаи жизни</li>
                <li class="bullet_text icon_1">Понимание стиля в общем и сезонных тенденций в частности</li>
                <li class="bullet_text icon_2">Практические пошаговые уроки: макияж, маникюр, прически</li>
                <li class="bullet_text icon_3">План правильного и незатратного ухода за кожей, волосами и ногтями</li>
            </ul>
        </div>
    </div>
</section>

<!-- pre-footer -->

<section class="promo">
    <div class="container">
        <form class="promo_form" action="" method="post">
            <h3><span>Заполните</span> форму <br>для получения доступа</h3>
            <input type="email" class="header-form_name" name="email" value="<?= isset($client) ? $client->getEmail() : ''; ?>" placeholder="Введите ваш email">
            <input type="hidden" name="identifier" value="<?=$project;?>">
            <input type="hidden" name="partner" value="<?=$partner;?>">
            <? if(isset($client)): ?>
                <input type="hidden" name="client" value="<?=$client->getId();?>">
                <input type="hidden" name="redirection_link" value="<?=$client->getRedirectionLink();?>">
            <? endif; ?>
            <input type="submit" class="header-form_submit" name="name" value="Получить бесплатно">
            <p>Мастер классы сразу же будут<br> высланы на Вашу почту!</p>
        </form>
        <div class="promo_content">
            <h2><span>Вы станете неотразимой!</span></h2>
            <div class="hurry_get">Успей получить бесплатно!</div>
            <div class="timer_blocks">
                <div class="timer_block">
                    <div class="time_text hours">00</div>
                    <div class="time_description">Часов</div>
                </div>
                <div class="timer_block">
                    <div class="time_text minutes">08</div>
                    <div class="time_description">Минут</div>
                </div>
                <div class="timer_block">
                    <div class="time_text seconds">46</div>
                    <div class="time_description">Секунд</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->

<footer>
    <div class="container">
        <div class="wrap">
            <div class="footer_info">
                <a href="http://inc.masaa.ru/pay.html">Оплата</a>
                <a href="http://inc.masaa.ru/pay.html">Финансовая информация</a>
                <a href="http://inc.masaa.ru/policy.html">Пользовательское соглашение</a>
                <a href="http://inc.masaa.ru/security.html">Безопасность</a>
            </div>
            <div class="copyright">Masaa.ru 2014-2016. Все права защищены</div>
        </div>
        <a href="http://masaa.ru/" target="_blank"><img src="./img/logo_footer.png" alt="Masaa" class="logo" /></a>
    </div>
</footer>


<?php include_once("/var/www/inc.masaa.ru/inc/pay_yandex/pay_yandex.php");?>

<!--модальное окно-->
<div class="modal_bg">
    <div class="overlay"></div>
    <div class="container">
        <form class="promo_form"  action="" method="post">
            <div class="close">X</div>
            <h3><span>Заполните</span> форму <br>для получения доступа</h3>
            <input type="email" class="header-form_name" name="email" value="<?= isset($client) ? $client->getEmail() : ''; ?>" placeholder="Введите ваш email">
            <input type="hidden" name="identifier" value="<?=$project;?>">
            <input type="hidden" name="partner" value="<?=$partner;?>">
            <? if(isset($client)): ?>
                <input type="hidden" name="client" value="<?=$client->getId();?>">
                <input type="hidden" name="redirection_link" value="<?=$client->getRedirectionLink();?>">
            <? endif; ?>
            <input type="submit" class="header-form_submit" name="name" value="Получить доступ">
            <p>Мастер классы сразу же будут<br> высланы на Вашу почту!</p>
        </form>
    </div>
</div>
<!--\модальное окно-->
<link rel="stylesheet" type="text/css" href="./css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<script src="./js/jquery.min.js"></script>
<script src="./js/site.js"></script>
<? include('/var/www/inc.masaa.ru/inc/landing/foot.php'); ?>
</body>
</html>
