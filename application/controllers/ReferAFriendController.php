<?php

namespace application\controllers;
use application\core\Controller;


class ReferAFriendController extends Controller {

	public function referAFriendAction(){
        $title = 'Refer a Friend - Business Setup in Dubai';
		$data = ['script' => 'refer-a-friend.js', 'style' => 'refer-a-friend.css'];
		$this->view->render($title, $data);
	}
}