<?php

namespace application\controllers;
use application\core\Controller;


class BusinessActivitiesController extends Controller {

	public function businessActivitiesAction(){
        $title = 'Business activities permitted in Meydan Free Zone';
		$data = ['script' => 'business-activities.js'];
		$this->view->render($title, $data);
	}
}