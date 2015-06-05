<?php
use Fuel\Core\Controller_Hybrid;

class Controller_Layout extends Controller_Hybrid
{
	public function before() {
		parent::before();
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
		$thie->template->title = "タイトル";
		$this->template->content = "hoge";
// 		$this->template->content = View::forge('layout/layout');
	}
}