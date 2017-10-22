<?php
$num_yandex=38910015;//Счетчик яндекса
$num_google="UA-74372248-25";
$num_mail=2788984;//Счетчик mail

$new_price="";
$old_prce="";
$percent="";

function get_prices($project) {
	global $new_price;
	global $old_price;
	global $percent;
	$old_price = file_get_contents("http://masaa.ru/panel/price/$project/old");
	$new_price = file_get_contents("http://masaa.ru/panel/price/$project");
	$percent=round(($old_price-$new_price)*100/$old_price);
	//$new_price=substr($new_price, 0,1)." ".substr($new_price, 1);
	//$old_price=substr($old_price, 0,1)." ".substr($old_price, 1);
}

?>
