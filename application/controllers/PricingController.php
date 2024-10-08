<?php

namespace application\controllers;
use application\core\Controller;


class PricingController extends Controller {

	public function pricingAction(){
        $title = 'Meydan Free Zone license costs';
		$this->view->render($title);
	}
}