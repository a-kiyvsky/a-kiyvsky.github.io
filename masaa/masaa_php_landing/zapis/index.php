<?php
include_once '/var/www/inc.masaa.ru/inc/client.php';

if(isset($client))
{
    if($timestamp = $client->visitingPage())
    {
        //Место для инклюда тела лендинга

        include_once '../specsale/index.php';

    }
    else
    {
        //Место для инклюда тела страницы для просрочивших
        include_once '../specsale/index2.php';
        //Закончили иклюд тела страницы для просрочивших
    }
}
