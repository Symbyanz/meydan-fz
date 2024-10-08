<?php

namespace application\controllers;
use application\core\Controller;


class DocsController extends Controller {

	public function privacyDocAction(){
		$file = './public/docs/Privacy-Policy.pdf';
		$filename = 'Privacy-Policy.pdf';

		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="' . $filename . '"');
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: ' . filesize($file));
		header('Accept-Ranges: bytes');

		@readfile($file);
	}

	public function tcDocAction(){
		$file = './public/docs/Terms-and-Conditions.pdf';
		$filename = 'Terms-and-Conditions.pdf';

		header('Content-type: application/pdf');
		header('Content-Disposition: inline; filename="' . $filename . '"');
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: ' . filesize($file));
		header('Accept-Ranges: bytes');

		@readfile($file);
	}
}