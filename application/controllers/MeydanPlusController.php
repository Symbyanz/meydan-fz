<?php

namespace application\controllers;
use application\core\Controller;


class MeydanPlusController extends Controller {

	public function meydanPlusAction(){
		$title = 'Meydan concierge services';
		$data = ['script' => 'meydan-plus.js'];
		$this->view->render($title, $data);
	}
}