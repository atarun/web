<?php
use Fuel\Core\Controller_Hybrid;

class Controller_Abstruct extends Controller_Hybrid
{
	public function before() {
		parent::before();
		$this->template->title = "タイトル";
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
// 		$this->template->content = View::forge('layout/layout');
	}
}