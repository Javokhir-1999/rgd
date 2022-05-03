<?php
	$name = htmlspecialchars($_POST['name']);
	$phone = htmlspecialchars($_POST['number']);
	$token="xxxxxxx:xxxxxxxxxxxxxxxxxx";
	$chat_id="-1001114063463";
	$arr = array(
		'Имя пользователья:'=>$name,
		'Телефон:'=>$phone
	);
	foreach($arr as $key => $value) {
		$txt .= "<b>".$key."</b> ".$value."%0A";
	};
	$sendToTelegram=$sendToTelegram=header("Location: https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}"); exit;
?>