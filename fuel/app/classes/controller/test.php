<?php

class Controller_Test extends Controller_Abstruct
{
	public $template = 'template2';
	
	public function before() {
		parent::before();
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
		$this->template->content = View::forge('test/index');
	}
}