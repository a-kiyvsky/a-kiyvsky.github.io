<?
$project=136;
include('params.php');
$partner = 0;
if ($_GET['partner']) { $partner = $_GET['partner']; }
$client_hash = md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']);

if ($partner) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://lk.masaa.ru/api/partner');
    curl_setopt($curl, CURLOPT_POSTFIELDS, "partner=$partner&client_hash=$client_hash&type=1");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $sender = curl_exec($curl);
    curl_close($curl);
}
if (isset($_POST['email']) && isset($_POST['partner']) && isset($_POST['identifier'])) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://send.masaa.ru/api/stepLanding/email');
    curl_setopt($curl, CURLOPT_POSTFIELDS, "partner=$_POST[partner]&identifier=$_POST[identifier]&email=$_POST[email]&client_hash=$client_hash");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $res = curl_exec($curl);
    curl_close($curl);

    $_POST['name'] = (!empty($_POST['name']))?$_POST['name']:"Дорогой друг";
    if ($res === 'redirect') {
        header('Content-Type: text/html; charset=utf-8');
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://send.masaa.ru/sub');
        curl_setopt($curl, CURLOPT_POSTFIELDS, "partner=$partner&identifier=$_POST[identifier]&email=$_POST[email]&name=$_POST[name]&client_hash=$client_hash");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);
        $res = curl_exec($curl);
        curl_close($curl);
    } else { header("Location: /?r=$_POST[name]"); }

} elseif (!$_POST && isset($_GET['r'])) {
	$_POST['user'] = (!empty($_GET['r']))?$_GET['r']:"Дорогой друг";

	?>
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
    <?= include_once('/var/www/inc.masaa.ru/inc/confirm.php'); ?>
    </body>
    </html>
<?
} else {

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>15 пошаговых уроков от лучших художников России и СНГ!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  </head>
  <body>

    <!-- Header -->

    <header>
      <div class="container">
        <a href="#"><img src="./img/logo.png" alt="Masaa" class="logo" /></a>
        <h1>15 пошаговых уроков по живописи <br>от лучших художников России и СНГ!</h1>
      </div>
      <div class="row">
        <div class="container">
          <div class="header-content">
            <p>Начните учиться живописи уже сейчас!</p>
            <form class="header-form" action="http://send.masaa.ru/sub" method="post">
              <input type="email" class="header-form_name" name="email" value="" placeholder="Введите ваш email">
              <input type="hidden" name="identifier" value="<?=$project;?>">
    			<input type="hidden" name="partner" value="<?=$partner;?>">
              <input type="submit" class="header-form_submit" name="name" value="Получить доступ">
              <p>Пропустили вебинар? Вышлем запись на почту!</p>
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
        <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/xqah6JihnXo" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="results">
          <h2>Что вы получаете?</h2>
          <ul class="bullets">
            <li class="bullet_text icon_0">напишите потрясающие картины своими руками</li>
            <li class="bullet_text icon_1">научитесь писать картины “с нуля” даже если вы новичок!</li>
            <li class="bullet_text icon_2">основы написания картин пастелью, акварелью, гуашью, акрилом</li>
            <li class="bullet_text icon_3">секреты правильного подбора материалов и инструментов</li>
            <li class="bullet_text icon_4">фишки и тонкости создания картин мастихином</li>
            <li class="bullet_text icon_5">тонкости захватывающих и неподражаемых техник написания картин</li>
            <li class="bullet_text icon_6">знакомство с творческой медитацией</li>
          </ul>
        </div>
        </div>
    </section>

    <!-- pre-footer -->

    <section class="promo">
      <div class="container">
        <form class="promo_form" action="http://send.masaa.ru/sub" method="post">
          <h3><span>Заполните</span> форму <br>для получения доступа</h3>
          <input type="email" class="header-form_name" name="email" value="" placeholder="Введите ваш email">
          <input type="hidden" name="identifier" value="<?=$project;?>">
          <input type="hidden" name="partner" value="<?=$partner;?>">
          <input type="submit" class="header-form_submit" name="name" value="Получить доступ">
          <p>Пропустили вебинар? Вышлем запись на почту!</p>
        </form>
        <div class="promo_content">
          <h2><span>БОЛЕЕ 5300 человек</span> <span>получили мастер-классы</span></h2>\
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
          <div class="hurry_get">Предложение действительно еще </div>
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
        <a href="#"><img src="./img/logo_footer.png" alt="Masaa" class="logo" /></a>
      </div>
    </footer>


<?php include_once("/var/www/inc.masaa.ru/inc/pay_yandex/pay_yandex.php");?>

    <!--модальное окно-->
    <div class="modal_bg">
      <div class="overlay"></div>
      <div class="container">
        <form class="promo_form"  action="http://send.masaa.ru/sub" method="post">
          <div class="close">X</div>
          <h3><span>Заполните</span> форму <br>для получения доступа</h3>
          <input type="email" class="header-form_name" name="email" value="" placeholder="Введите ваш email">
          <input type="hidden" name="identifier" value="<?=$project;?>">
          <input type="hidden" name="partner" value="<?=$partner;?>">
          <input type="submit" class="header-form_submit" name="name" value="Получить доступ">
          <p>Пропустили вебинар? Вышлем запись на почту!</p>
        </form>
      </div>
    </div>
    <!--\модальное окно-->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/site.js"></script>
<? include('/var/www/inc.masaa.ru/inc/counters.php'); ?>
  </body>
</html>
<? } ?>
