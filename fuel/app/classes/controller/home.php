<?php
use Fuel\Core\Controller_Hybrid;

class Controller_Home extends Controller_Hybrid
{
	public function before() {
		parent::before();
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
// 		var_dump("hoge");
// 		return Response::forge(View::forge('home/index'));
	}
}