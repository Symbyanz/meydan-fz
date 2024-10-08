<?php

namespace application\controllers;
use application\core\Controller;


class MainController extends Controller {

	public function mainAction(){
// 		$vars = $this->model->getCodes('main');
//		$title = $this->route['controller'].'/'.$this->route['action'];
		$title = 'Business Setup in a Dubai Free Zone, UAE';
		$this->view->render($title);
	}

}