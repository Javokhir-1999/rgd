<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
     public function order(){

     	$name = htmlspecialchars($_POST['name']);
		$phone = htmlspecialchars($_POST['number']);
		$token="1835364054:AAEmovg0QlQzSxwvnARXlVJ5tmdXBvaFWIc";
		$chat_id="-1001114063463";
		$arr = array(
			'Имя пользователья:'=>$name,
			'Телефон:'=>$phone
		);
		foreach($arr as $key => $value) {
			$txt .= "<b>".$key."</b> ".$value."%0A";
		};
		$sendToTelegram=fopen("Location: https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}"); exit;
		// if ($sendToTelegram) {
		  // echo"Спасибо Мы вам скоро перезваним";
		// }else {
			// echo"Error";
		// }
		//https://api.telegram.org/bot{token}/getUpdates
	     }
}
