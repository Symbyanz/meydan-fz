<?php

namespace application\controllers;
use application\core\Controller;


class WhyMeydanFreeZoneController extends Controller {
	public function whyMeydanFreeZoneAction(){
		$title = 'Start your business in Meydan Free Zone';
		$this->view->render($title);
	}
}