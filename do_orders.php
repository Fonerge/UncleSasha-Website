<?php
$ip = "127.0.0.1";
$db_name = "root";
$db_pass = "";
$table_name = "unclesasha_db";
$data = mysqli_connect($ip, $db_name, $db_pass , $table_name);

$token = "5914208735:AAF796klpEGmuQZTYn5VJz9V8rKfK4X2m-w";
$chat_id = "-845583453";

$fio = $_POST['f_name'];
$telephone = $_POST['f_phone'];
$type_conn = $_POST['f_messenger'];

mysqli_query($data, "INSERT INTO orders (`id`, `name`, `phone`, `messenger`) VALUES (NULL, '$fio', '$telephone', '$type_conn')") or die('проблема блять!');

$arr = array(
  'ФИО: ' => $fio,
  'Телефон: ' => $telephone,
  'Мессенджер' => $type_conn
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.php');
} else {
  echo "<h1>Ошибка подключения :(</h1>";
}

?>