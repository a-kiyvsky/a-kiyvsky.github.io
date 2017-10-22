<?
if (isset($_POST['name1'], $_POST['name2'], $_POST['name3'])) {
  $info = getimagesize('thanks.jpg');
  $width = $info[0];
  $height = $info[1];
  $font = dirname(__FILE__).'/certificate.ttf';
  $text = $_POST['name1'] . ' ' . $_POST['name2'] . ' ' . $_POST['name3'];
  $size = ((($width + $height) / 3) * 2 / mb_strlen($text)) + 6;
  $box = imagettfbbox($size, 0, $font, $text);
  $x = ($width) / 2 - abs($box[4] - $box[0]) / 2;
  // $y = $height/2 + abs($box[5] - $box[1])/2;
  $y = 1848;
  $image = imagecreatefromjpeg('thanks.jpg');
  $color = imagecolorallocate($image, 255, 255, 255);

  imagettftext($image, $size, 0, $x, $y, $color, $font, $text);

  // header('Content-Type: image/jpeg');
  // imagejpeg($image);


  header('Content-Description: File Transfer');
  header('Content-Type: image/jpeg');
  header('Content-Disposition: attachment; filename=thanks.jpg');
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
    <title>Загрузка благодарности</title>

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

    <form action="" method=post>

      <h1>Благодарственное письмо для спикера<br> конференции "Здоровье и долголетие в XXI веке"</h1>

      ФИО указывается в дательном падеже (кому выдан),<br>например, <i>Ивановой Ирине Ивановне</i>.<br><br>
      <table>
        <tr><td>Фамилия:</td><td><input required type="text" name="name1"></td></tr>
        <tr><td>Имя:</td><td><input required type="text" name="name2"></td></tr>
        <tr><td>Отчество:</td><td><input type="text" name="name3"></td></tr>
      </table>
      <br><button>Получить благодарность</button>
    </form>

  </body>
</html>
