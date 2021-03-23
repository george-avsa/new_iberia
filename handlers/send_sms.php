<?php 
require "../libs/db.php";
$message = 'Имя: '.$_POST['name'] . 'Телефон: '.$_POST['telephone'] .'Почта: '.$_POST['email']. 'Комментарий: '.$_POST['comment'];
if (empty($_POST['name'])){
	echo "name_empty";
} elseif (empty($_POST['telephone']) or strlen($_POST['telephone'])!=17) {
	echo 'phone_empty';	
} elseif (empty($_POST['email'])) {
	echo "mail_empty";
} elseif (strlen($_POST['comment'])>200) {
	echo "big_comment";
} else {
$ch = curl_init("https://sms.ru/sms/send");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    "api_id" => "58AC6D9C-D978-46F6-F91C-792775A6A96F",
    "to" => "79773263306", // До 100 штук до раз
    "msg" => $message, // Если приходят крякозябры, то уберите iconv и оставьте только "Привет!",
    /*
    // Если вы хотите отправлять разные тексты на разные номера, воспользуйтесь этим кодом. В этом случае to и msg нужно убрать.
    "multi" => array( // до 100 штук за раз
        "79773263306"=> iconv("windows-1251", "utf-8", "Привет 1"), // Если приходят крякозябры, то уберите iconv и оставьте только "Привет!",
        "74993221627"=> iconv("windows-1251", "utf-8", "Привет 2") 
    ),
    */
    "json" => 1 // Для получения более развернутого ответа от сервера
)));
$body = curl_exec($ch);
curl_close($ch);

echo $body;
// $json = json_decode($body);
// if ($json) { // Получен ответ от сервера
//     print_r($json); // Для дебага
//     if ($json->status == "OK") { // Запрос выполнился
//         foreach ($json->sms as $phone => $data) { // Перебираем массив СМС сообщений
//             if ($data->status == "OK") { // Сообщение отправлено
//                 echo "Сообщение на номер $phone успешно отправлено. ";
//                 echo "ID сообщения: $data->sms_id. ";
//                 echo "";
//             } else { // Ошибка в отправке
//                 echo "Сообщение на номер $phone не отправлено. ";
//                 echo "Код ошибки: $data->status_code. ";
//                 echo "Текст ошибки: $data->status_text. ";
//                 echo "";
//             }
//         }
//         echo "Баланс после отправки: $json->balance руб.";
//         echo "";
//     } else { // Запрос не выполнился (возможно ошибка авторизации, параметрах, итд...)
//         echo "Запрос не выполнился. ";      
//         echo "Код ошибки: $json->status_code. ";
//         echo "Текст ошибки: $json->status_text. ";
//     }
// } else { 

//     echo "Запрос не выполнился. Не удалось установить связь с сервером. ";

// }
} 
?>