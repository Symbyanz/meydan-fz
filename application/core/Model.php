<?php

namespace application\core;
use application\lib\Db;

abstract class Model{
	public $db;
	
	public function __construct(){
		// использовать, если надо будет подключаться к бд
		// $this->db = new Db;
	}
}