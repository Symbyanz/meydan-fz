<?php

namespace application\controllers;
use application\core\Controller;


class JqueryController extends Controller {

	public function sendFormAction(){
		if(!empty($_POST)){
			if(strlen($_POST['name']) > 0 && strlen($_POST['company']) > 0 && strlen($_POST['email']) > 0 && strlen($_POST['phone']) > 0){
				$res = $this->model->sendContactForm($_POST);
				if(!$res){
					echo("Ошибка отправки запроса!");
				} else {
					echo("Запрос был отправлен!");
				}
			}else if(strlen($_POST['phone']) > 0 && strlen($_POST['theme']) > 0){
				$res = $this->model->sendForm($_POST);
				if(!$res){
					echo("Ошибка отправки запроса!");
				} else {
					echo("Запрос был отправлен!");
				}
			}else {
				echo("Запрос был не верно сформирован!");
			}
		}else {
			$this->view->errorCode(404);
		}
	}

}