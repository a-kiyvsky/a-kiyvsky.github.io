<?php

$recepient = "nikolaevpave@mail.ru";
$recepient_2 = "CM163@bk.ru";
$sitename = "Исток-Строй";

$name = trim($_GET["name"]);
$phone = trim($_GET["tell"]);

$pagetitle = "Новая заявка с сайта \"$sitename\"";
$message = "Имя: $name \nТелефон: $phone";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
