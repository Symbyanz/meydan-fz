<?php

namespace application\models;
use application\core\Model;

class Jquery extends Model{

	public function sendContactForm($data){
		$mail_str = "Новая заявка в ЦентрОбрКонсалт".PHP_EOL;
		$mail_str.= "___________________________________". PHP_EOL.PHP_EOL;
		$mail_str.= "ФИО: ".$_POST['name'].PHP_EOL;
		$mail_str .= "Организация: ".$_POST['company'].PHP_EOL;
		$mail_str .= "E-mail: ".$_POST['email'].PHP_EOL;
		$mail_str .= "Телефон: ".$_POST['phone'].PHP_EOL;
		$mail_str.= "___________________________________". PHP_EOL;

		mail("info@centeredu.ru", "Заявка — centeredu.ru", $mail_str);
		return true;
	}

	public function sendForm($data){
		$mail_str = "Запрос на консультацию в ЦентрОбрКонсалт".PHP_EOL;
		$mail_str.= "___________________________________". PHP_EOL.PHP_EOL;
		$mail_str .= "Тема: ".$_POST['theme'].PHP_EOL;
		$mail_str .= "Телефон: ".$_POST['phone'].PHP_EOL;
		$mail_str.= "___________________________________". PHP_EOL;

		mail("info@centeredu.ru", "Консультация — centeredu.ru", $mail_str);
		return true;
	}

}