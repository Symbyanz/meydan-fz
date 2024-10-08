<?php

namespace application\controllers;
use application\core\Controller;


class MeydanCommerceController extends Controller {

	public function MeydanCommerceAction(){
		$title = 'Meydan Commerce - For Meydan eCommerce license holders';
		$data = ['script' => 'meydan-commerce.js'];
		$this->view->render($title, $data);
	}

}