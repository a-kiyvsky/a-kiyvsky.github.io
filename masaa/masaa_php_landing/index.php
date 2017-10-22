<?
require_once "/var/www/inc.masaa.ru/inc/client.php";
$project=1474;
include('params.php');

$client_hash = $client->getHash();

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
        $body = "partner=$partner&identifier=$_POST[identifier]&email=$_POST[email]&name=$_POST[name]&client_hash=$client_hash";
        if(isset($client))
            $body .= "&client=".$client->getId();
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'http://send.masaa.ru/sub');
        curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($res);
        if(!json_last_error())
        {
            header('Location: '.$client->getRedirectionLink());
        }
        exit();
    } else {
        header("Location: /?r=$_POST[name]");
    }

} elseif (!$_POST && isset($_GET['r'])) {
	$_POST['user'] = (!empty($_GET['r']))?$_GET['r']:"Дорогой друг";
    include_once 'include/confirm.php';
} else {
    //Тут вставляется тело лендинга. Обрати внимание на то, что в теле лендинга есть
    //ещё инклюды и в формах есть новые поля и value
    include_once 'include/landing_body.php';
}
