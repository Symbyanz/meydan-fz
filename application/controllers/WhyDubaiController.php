<?php

namespace application\controllers;
use application\core\Controller;


class WhyDubaiController extends Controller {

	public function whyDubaiAction(){
        $title = 'Why start your business in Dubai, UAE';
		$this->view->render($title);
	}
}