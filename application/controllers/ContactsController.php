<?php

namespace application\controllers;
use application\core\Controller;


class ContactsController extends Controller {

	public function contactsAction(){
// 		$vars = $this->model->getCodes('main');
//		$title = $this->route['controller'].'/'.$this->route['action'];
        $title = 'Контакты';
		$this->view->render($title);
	}
}