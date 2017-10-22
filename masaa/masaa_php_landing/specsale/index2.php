<?php
include('../params.php');
$idlk=3397;
get_prices($idlk);
?>
<!DOCTYPE html>
<html lang="ru">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" href="favicon.png" />
  <link rel="stylesheet" href="../specsale/css/default.css">
  <link rel="stylesheet" href="../specsale/css/style.css">
  <link rel="stylesheet" href="../specsale/css/default-320.css">
  <link rel="stylesheet" href="../specsale/css/style-320.css">
  <link rel="stylesheet" href="http://inc.masaa.ru/pay_yandex/paypopup.css">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta property="og:image" content="../favicon.png">

  <title>Masaa - 30 мастер-классов по эзотерике</title>
  <!--[if lt IE 9]>
  <script src="./js/html5shiv.min.js"></script>
  <![endif]-->
 </head>
 <body>
  <div class="centerlayer"><!--centerlayer-->
    <!-- header -->
    <header class="header">
      <div class="content">
        <a  href="http://masaa.ru" target=_blank class="block_logo"><img src="../specsale/img/logo.png" alt=""></a>
        <a href="#footer_form" class="do_order btn-orn scroll_to">Заказать</a>
        <nav>
          <ul class="nav floatli">
            <li><a href="#composition">О сборнике</a></li>
            <li><a href="#expert">Мнение эксперта</a></li>
            <li><a href="#what_get">Что вы получите</a></li>
            <li><a href="#feedbacks">Отзывы</a></li>
            <li><a href="#how_get">Как получить</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- \ header -->
    <!-- main -->
    <section class="main bl-supply">
      <div class="content">
        <div class="bl_img bl-lt">
          <div class="wrap_img">
            <img src="../specsale/img/box.png" alt="">
            <div class="action100"><span class="hd_act">АКЦИЯ! ТОЛЬКО СЕГОДНЯ!</span><span>Каждому 100-му участнику СКИДКА <?=$percent;?>% на сборник</span></div>
            <!--<div class="discount describe">скидка<span><?=$percent;?>%</span></div>-->
          </div>
        </div>
        <div class="bl_txt bl-rt">
          <div class="wrap-supply">
            <div class="header-supply">
              <h2>30 мастер-классов<br>по эзотерике<span class="txt-orn">Большой шаг на пути к себе</span></h2>
            </div>
            <div class="block_order">
              <div class="block_cost">
                <h3>Специальная цена</h3>
                <ul class="floatli">
                  <li class="old_cost"><span><?=$old_price;?></span> Р</li>
                  <li class="new_cost"><?=$new_price;?> Р</li>
                </ul>
              </div>
              <a class="do_order btn-orn scroll_to" href="#footer_form">Заказать<br>по акции</a>
            </div>
            <div class="limit footer-supply">
              <span class="txt-orn">Внимание! </span>Количество комплектов со скидкой ограничено! <div>Цена может подняться в любой момент!</div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- \ main -->

    <!-- composition -->
    <section class="composition" id="composition">
      <div class="content">
        <h2 class="h-ln">В сборник входит</h2>
          <ul class="floatli">
            <li>
              <div class="digit">30</div>
              <div class="txt">авторских<br>мастер-класса</div>
            </li>
            <li>
              <div class="digit">80</div>
              <div class="txt">часов записи<br>в HD качестве</div>
            </li>
            <li>
              <div class="digit">30</div>
              <div class="txt">профессиональных<br>спикеров</div>
            </li>
          </ul>
      </div>
    </section>
    <!-- \ composition -->

    <!-- speakers -->
    <section class="speakers">
      <div class="content">
        <h2 class="h-ln">Список мастер-классов и описание</h2>
        <ul class="floatli s_list not_showed">
<?php
include_once('list_spk.php');
foreach($array_spk as $v) {
  echo "<li>
          <div class=\"block_img\"><img src=\"".$v["src"]."\" alt=\"\"></div>
          <div class=\"block_txt\">
            <h3>".$v["txt"]."</h3>
            <div class=\"txt\">".$v["title"]."</div>
          </div>
        </li>";
}
?>
        </ul>
        <div class="open_more-btn speakers-btn">Смотреть все темы</div>
      </div>
    </section>
    <!-- \ speakers -->

    <!-- expert -->
    <section class="expert" id="expert">
      <div class="content">
        <div class="content">
          <h2 class="h-ln">Мнение эксперта</h2>
          <div class="bl_img bl-lt">
            <img src="../specsale/img/expert.jpg" alt="">
          </div>
          <div class="bl_txt bl-rt">
            <div class="profile hidden showed_m">— Руководитель центра Практической Нумерологии.</div>
            <div class="name hidden showed_m">Ткаленко Андрей Леонидович</div>
            <div class="txt"><span>И</span>стина прячется в деталях. Чем «проглотить за завтраком» с десяток умных книг, куда полезней остановиться на одной. Прочитать ее внимательно и вдумчиво. А затем перечитывать снова и снова, проникая в суть. В этом плане записи вебинаров – великолепная возможность пересмотреть и переосмыслить. Остепениться в вечной гонке за новыми знаниями и копнуть чуть глубже.</div>
            <div class="name showed hidden_m">— Ткаленко Андрей Леонидович</div>
            <div class="profile showed hidden_m">Руководитель центра Практической Нумерологии.Автор методики раскрытия потенциала через Дату Рождения,</div>
          </div>
        </div>
      </div>
    </section>
    <!-- \ expert -->

    <!-- block_discount -->
    <section class="block_discount">
      <div class="content">
        <div class="bl-lt do_order_discount">
          <h2>30 мастер-классов по <span class="txt-orn">личностному росту</span>
            <div class="block_cost block_cost_add hidden showed_m">
              <h3>Специальная цена</h3>
              <ul class="floatli">
                <li class="old_cost"><span><?=$old_price;?></span></li>
                <li class="new_cost"><?=$new_price;?> Р</li>
              </ul>
              <a href="#footer_form" class="do_order btn-orn scroll_to">Заказать по акции</a>
            </div>
          </h2>
          <div class="get_discount">Успейте заказать со скидкой!</div>
          <div class="describe">* записи высылаются в виде ссылок</div>
        </div>
        <div class="bl-rt discrount_cost hidden_m showed">
          <div class="block_cost">
            <h3>Специальная цена</h3>
            <ul class="floatli">
              <li class="old_cost"><span><?=$old_price;?></span> Р</li>
              <li class="new_cost"><?=$new_price;?> Р</li>
            </ul>
          </div>
          <a href="#footer_form" class="do_order btn-orn scroll_to">Заказать<br>по акции</a>
        </div>
        <div class="bl_img_discount">
          <img src="../specsale/img/box.png" alt="">
          <div class="discount">скидка<span><?=$percent;?>%</span></div>
        </div>
      </div>
    </section>
    <!-- \ block_discount -->

    <!-- what_get -->
    <section class="what_get" id="what_get">
      <div class="content">
        <h2 class="h-ln">Что вы получаете</h2>
        <ul class="floatli">
          <li>
            <div class="bl_img one_vralgn"><img src="../specsale/img/wg1.png" alt="" class="out_cont"></div>
            <div class="bl_txt">
              <h3>Смотрите в любой точке мира</h3>
              <div class="txt">Cмотрите когда удобно и где удобно, останавливайте, повторяйте за мастером, чтобы добиться лучших результатов</div>
            </div>
          </li>
          <li>
            <div class="bl_img one_vralgn"><img src="../specsale/img/wg2.png" alt="" class="out_cont"></div>
            <div class="bl_txt">
              <h3>Смотрите на любом устройстве</h3>
              <div class="txt">Формат записей поддерживает любое устройство: компьютер, планшет, телефон</div>
            </div>
          </li>
          <li>
            <div class="bl_img one_vralgn"><img src="../specsale/img/wg3.png" alt="" class="out_cont"></div>
            <div class="bl_txt">
              <h3>Неограниченный доступ по времени</h3>
              <div class="txt">После оплаты, вы получаете постоянный доступ, даже если вы случайно удалили или потеряли ссылку - мы вышлем вам дубликат</div>
            </div>
          </li>
          <li>
            <div class="bl_img one_vralgn"><img src="../specsale/img/wg4.png" alt="" class="out_cont"></div>
            <div class="bl_txt">
              <h3>Скачивайте себе на компьютер</h3>
              <div class="txt">Если у вас есть проблемы с интернетом, просто скачайте видеозаписи к себе на компьютер</div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- \ what_get -->

    <!-- feedbacks -->
    <section class="feedbacks" id="feedbacks">
      <div class="content">
        <h2 class="h-ln">Отзывы клиентов, которые приобрели мастер-классы</h2>
        <ul class="floatli feedbacks_ul feedbacks_ul_hidden">
          <li>
            <div class="bl_img"><img src="../specsale/img/fd1.jpg" alt=""></div>
            <div class="bl_txt">
              <h3 class="name">Анна</h3>
              <div class="txt">Энное количество лет назад накрепко подсела на различные тренинги и онлайн-курсы. У меня на компьютере собралась солидная такая коллекция всяких разностей. Комплект записей мастер-классов – что-то новенькое для меня. Море разнообразных тем, много интереснейших учителей. Смотрю, и отдыхаю душой! Рада, что могу пересмотреть уроки, на которые не попала в прямой эфир.</div>
              <div class="location">Херсон</div>
            </div>
          </li>
          <li>
            <div class="bl_img"><img src="../specsale/img/fd2.jpg" alt=""></div>
            <div class="bl_txt">
              <h3 class="name">Наталья</h3>
              <div class="txt">Мне кажется, комплект записей - это реальная возможность для тех, кто и учиться хочет, и жертвовать
    сном не готов. Я, например, живу в Красноярске, и по местному времени все вебинары начинаются в 23 вечера. Конечно, можно и по утрам записи пересматривать, но по-моему куда проще сразу заказать записи, и уже не зависеть ни от какого расписания.</div>
              <div class="location">Красноярск</div>
            </div>
          </li>
          <li>
            <div class="bl_img"><img src="../specsale/img/fd3.jpg" alt=""></div>
            <div class="bl_txt">
              <h3 class="name">Галина</h3>
              <div class="txt">Может, я немного отстала от жизни, но формат обучения в интернете я открыла для себя только в этом году. Раньше больше книги покупала, реже ходила на лекции и семинары в своем городе. Меня подкупило то, что можно учиться у известных учителей, при этом никуда не ездить. Посчитала цену, сравнила с тратами на лекции и книги… И почему я не училась в интернете раньше? Это же такая экономия!</div>
              <div class="location">Витебск</div>
            </div>
          </li>
          <li>
            <div class="bl_img"><img src="../specsale/img/fd4.jpg" alt=""></div>
            <div class="bl_txt">
              <h3 class="name">Галина</h3>
              <div class="txt">Под Новый год дала себе торжественное обещание: вместо сериалов и смешных видео смотреть что-нибудь
    полезное для саморазвития. На радость мне подвернулась возможность получить огромный набор обучающих уроков (да и еще по такой-то цене!). Как только начнется новая конференция, куплю еще один комплект. Для себя ничего не жалко :)</div>
              <div class="location">Киев</div>
            </div>
          </li>
        </ul>
        <div class="open_more-btn feedback-btn">Смотреть все отзывы</div>
      </div>
    </section>
    <!-- \ feedbacks -->

    <!-- how_get -->
    <section class="how_get" id="how_get">
      <div class="content">
        <h2 class="h-ln">Как получить все мастер-классы</h2>
        <ul class="floatli">
          <li>
            <a href="#footer_form" class="scroll_to">
              <div class="bl_img"><img src="../specsale/img/hw1.png" alt=""></div>
              <div class="bl_txt">
                <h3>Шаг 1</h3>
                <div class="txt">Заполните форму заказа на нашем сайте</div>
              </div>
            </a>
          </li>
          <li>
            <div class="bl_img"><img src="../specsale/img/hw2.png" alt=""></div>
            <div class="bl_txt">
              <h3>Шаг 2</h3>
              <div class="txt">Оплачивайте удобным для вас способом (более 40 способов)</div>
            </div>
          </li>
          <li>
            <div class="bl_img"><img src="../specsale/img/hw3.png" alt=""></div>
            <div class="bl_txt">
              <h3>Шаг 3</h3>
              <div class="txt">Получите доступ к мастер-классам сразу после внесения оплаты</div>
            </div>
          </li>
        </ul>
        <div class="describe">если у вас возникли трудности с оплатой или вопросы по продукту - заполните форму, менеджер перезвонит и проконсультирует</div>
      </div>
    </section>
    <!-- \ how_get -->

    <!-- footer_form -->
    <section class="footer_form bl-supply" id="footer_form">
      <div class="content">
        <div class="bl_img bl-lt">
          <div class="wrap_img">
            <img src="../specsale/img/box.png" class="showed hidden_m" alt="">
            <div class="describe showed hidden_m">* записи высылаются в виде ссылок</div>
          </div>
        </div>
        <div class="bl_txt bl-rt">
          <div class="wrap-supply">
            <div class="header-supply">
              <h2>ЗАКАЗЫВАЙТЕ СБОРНИК<br><span class="hidden_m">МАСТЕР-КЛАССОВ</span><span class="txt-orn"> ПРЯМО СЕЙЧАС!</span><span class="min_cost"><span class="hidden_m">По минимальной цене</span></span></h2>
              <div class="showed hidden_m">
                <div class="describe"><span>Внимание!</span> Цена может подняться в любой момент!
                <!--<div>Заказывайте прямо сейчас по минимальной цене!</div>--></div>
              </div>
              <div class="showed_m hidden">
                <div class="discount">скидка<span><?=$percent;?>%</span></div>
                <div class="block_cost">
                  <h3>Специальная цена</h3>
                  <ul class="floatli">
                    <li class="old_cost"><span>4450</span> Р</li>
                    <li class="new_cost"><?=$new_price;?> Р</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="block_order">
              <div class="block_footer_form">
                  <div class="time_over show">К сожалению, время акции истекло. Сожалеем об этом.</div>
              </div>
              <div class="showed_m hidden">
                <div class="describe"><span>Внимание!</span> Цена может подняться в любой момент!
                <!--<div>Заказывайте прямо сейчас по минимальной цене!</div>--></div>
              </div>
              <div class="showed hidden_m">
                <div class="discount">скидка<span><?=$percent;?>%</span></div>
                <div class="block_cost">
                  <h3>Специальная цена</h3>
                  <ul class="floatli">
                    <li class="old_cost"><span>4450</span> Р</li>
                    <li class="new_cost"><?=$new_price;?> Р</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bl_img bl-lt showed_m hidden">
          <div class="wrap_img">
            <img src="../specsale/img/box.png" class="showed hidden_m" alt="">
            <div class="block_timer">

            </div>
            <div class="describe showed_m hidden">* записи высылаются в виде ссылок</div>
          </div>
        </div>
      </div>
    </section>
    <!-- \ footer_form -->
    <!-- footer -->
    <footer class="footer">
      <div class="content">
        <div class="block_footer_links">
          <nav class="footer_nav">
            <ul class="floatli">
              <li><a href="" class="do_pay">Оплата</a></li>
              <li><a href="http://inc.masaa.ru/pay.html" target=_blank>Финансовая информация</a></li>
              <li><a href="http://inc.masaa.ru/policy.html" target=_blank>Пользовательское соглашение</a></li>
              <li><a href="http://inc.masaa.ru/security.html" target=_blank>Безопасность</a></li>
            </ul>
          </nav>
          <div class="rights">Masaa.ru 2014-2016. Все права защищены</div>
        </div>

        <a href="http://masaa.ru" target=_blank class="block_logo"><img src="../specsale/img/logo.png" alt=""></a>
      </div>
    </footer>
    <!-- \ footer -->

  </div><!--\centerlayer-->
    <?php include_once("/var/www/inc.masaa.ru/inc/pay_yandex/pay_yandex.php");?>
    <script type="text/javascript">
      var time_left = <?= $timestamp; ?>;
    </script>
    <script src="../specsale/js/jquery.min.js"></script>
    <script src="../specsale/js/jquery.lwtCountdown-0.9.5.js"></script>
    <script src="http://inc.masaa.ru/source/steporder/stepCall.js"></script>
    <script src="http://inc.masaa.ru/pay_yandex/pay_yandex.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
                time_left /= 1000;
                setInterval(function () {
                    time_left--;
                    if (time_left < 1) {
                        $('.block_footer_form').find('form').remove();
                        $('.block_footer_form').find('.time_over').show();
                    }
                }, 1000);
            });
    </script>
    <script src="../specsale/js/site.js"></script>
  <?
  if(isset($client) && $client->getPartner()){
      if ($client->echoCounters()) {
          $client->echoCounters(1);
      }
  }
  else
  {
      include_once '../params.php';
      include_once '/var/www/inc.masaa.ru/inc/counters.php';
  }
  ?>
 </body>
</html>
