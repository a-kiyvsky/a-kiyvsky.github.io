<?
include_once('../params.php');
if (isset($_GET['name1'], $_GET['name2'], $_GET['name3'])) {
  $info = getimagesize('certificate.jpg');
  $width = $info[0];
  $height = $info[1];
  $font = dirname(__FILE__).'/certificate.ttf';
  $text = $_GET['name1'] . ' ' . $_GET['name2'] . ' ' . $_GET['name3'];
  $size = ((($width + $height) / 3) * 2 / mb_strlen($text)) + 6;
  $box = imagettfbbox($size, 0, $font, $text);
  //$x = ($width) / 2 - abs($box[4] - $box[0]) / 2;
  // $y = $height/2 + abs($box[5] - $box[1])/2;
  $x=505;
  $y = 893;
  $image = imagecreatefromjpeg('certificate.jpg');
  $color = imagecolorallocate($image, 255, 255, 255);

  imagettftext($image, $size, 0, $x, $y, $color, $font, $text);

  // Download Speakers
	include_once('/var/www/inc.masaa.ru/inc/speakers_name.php');
	$x_speaker[1] = 150; $y_speaker[1] = 1450;		// координаты 1-го блока
	$x_speaker[2] = 900; $y_speaker[2] = 1450;		// координаты 2-го блока
	$x_speaker[3] = 1550; $y_speaker[3] = 1450;		// координаты 3-го блока
	$y_speaker_plus = 50;							// высота между спикерами в блоке
	$speaker_num_block = 13;						// количество спикеров в блок
	$speaker_font_size = '36px';					// размер шрифта спикеров
	$color_speaker = imagecolorallocate($image, 255, 255, 255);		// цвет шрифта спикеров

	$data = array_chunk($speakers_all, $speaker_num_block);
	$i = 1;
	foreach ( $data as $row ) {
		$y_speaker_res = $y_speaker[$i];
		foreach ( $row as $value ) {
			$y_speaker_res = $y_speaker_res + $y_speaker_plus;
			$pos = strripos($value, ' и ');
			if ($pos === false) {
				imagettftext($image, $speaker_font_size, 0, $x_speaker[$i], $y_speaker_res, $color_speaker, $font, $value);
			} else {
				$value = explode(' и ', $value);
				imagettftext($image, $speaker_font_size, 0, $x_speaker[$i], $y_speaker_res, $color_speaker, $font, $value[0]);
				$y_speaker_res = $y_speaker_res + $y_speaker_plus;
				imagettftext($image, $speaker_font_size, 0, $x_speaker[$i], $y_speaker_res, $color_speaker, $font, $value[1]);
			}

		}
		$i++;
	}
  // Download Speakers


  // header('Content-Type: image/jpeg');
  // imagejpeg($image);


  header('Content-Description: File Transfer');
  header('Content-Type: image/jpeg');
  header('Content-Disposition: attachment; filename=certificate.jpg');
  header('Content-Transfer-Encoding: binary');
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  // header('Content-Length: '.filesize($file));
  ob_clean();
  flush();
  imagejpeg($image);


  die;
}
?>
<!doctype html>
<html>
  <head>

    <meta charset="utf-8">
    <title>Загрузка сертификата</title>

    <style>

      html,body { height: 100%; width: 100%; margin: 0; }
      form
      {
        font: 14px Arial;
        color: #666;
        text-align: center;
        width: 500px;
        height: 400px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-left: -250px;
        margin-top: -225px;
        background: #f6f6f6;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        box-sizing: border-box;
        z-index: 2;
      }

      form table { margin: 10px auto; border-collapse: collapse; }
      form table td { text-align: left; padding: 7px 10px; }

      form table td input { width: 250px; font: bold 16px Arial; border: 1px solid #ccc; background: white; padding: 5px; border-radius: 5px; box-shadow: inset 0 2px 5px rgba(0,0,0,0.1); outline: none; }

      form table td input:focus { box-shadow: inset 0 2px 5px rgba(0,0,0,0.1), 0 0 5px rgba(0,102,204,0.5); border: 1px solid #8be; }

      h1 { font-size: 22px; font-weight: normal; margin: 20px 0 30px; }

      button
      {
        font: 16px Arial;
        color: white;
        border-radius: 3px;
        border: 0;
        background: #f8971d;
        padding: .5em 1em;
        box-shadow: inset 0 -2px rgba(0,0,0,0.2);
        cursor: pointer;
        outline: none;
      }
      button:hover { box-shadow: inset 0 -2px rgba(0,0,0,0.2), inset 0 0 100px rgba(0,0,0,0.15); }
      button:active
      {
        color: transparent;
        text-shadow: 0 1px 0 white;
        box-shadow: inset 0 2px rgba(0,0,0,0.2), inset 0 0 100px rgba(0,0,0,0.3);
      }

      img { position: absolute; top: 100%; left: 50%; margin-left: -22px; margin-top: -75px; opacity: 0.1; -ms-transition: opacity .15s ease-in-out; -moz-transition: opacity .15s ease-in-out; -webkit-transition: opacity .15s ease-in-out; z-index: 1; border: 0; }
      img:hover { opacity: 1; }

    </style>

  </head>
  <body>

    <form action="" method=get>

      <h1>Загрузка сертификата участника<br> конференции<br>"Здоровье и долголетие в XXI веке"</h1>

      ФИО указывается в дательном падеже (кому выдан),<br>например, <i>Ивановой Ирине Ивановне</i>.<br><br>
      <table>
        <tr><td>Фамилия:</td><td><input required type=text name=name1></td></tr>
        <tr><td>Имя:</td><td><input required type=text name=name2></td></tr>
        <tr><td>Отчество:</td><td><input type=text name=name3></td></tr>
      </table>
      <br><button>Получить сертификат</button>
    </form>

  </body>
</html>
