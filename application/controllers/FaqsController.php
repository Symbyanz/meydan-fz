<?php

namespace application\controllers;
use application\core\Controller;


class FaqsController extends Controller {

	public function faqsAction(){
		$title = 'FAQs - Business Setup in Dubai';
		$data = ['script' => 'faqs.js'];
		$this->view->render($title, $data);
	}
}