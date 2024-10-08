<?php

namespace application\controllers;
use application\core\Controller;


class AboutUsController extends Controller {

	public function AboutUsAction(){
        $title = 'About Meydan Free Zone';
		$this->view->render($title);
	}
}