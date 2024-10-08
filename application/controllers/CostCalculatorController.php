<?php

namespace application\controllers;
use application\core\Controller;


class CostCalculatorController extends Controller {

	public function costCalculatorAction(){
        $title = 'Cost Calculator - Business Setup in Dubai';
		$data = ['script' => 'cost-calculator.js'];
		$this->view->render($title, $data);
	}
}