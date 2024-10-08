<?php

namespace application\controllers;
use application\core\Controller;


class StartYourBusinessController extends Controller {

	public function startYourBusinessAction(){
        $title = 'Meydan Free Zone - Built for Business. Designed for Life.';
		$this->view->render($title);
	}
}