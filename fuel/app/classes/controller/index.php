<?php

class Controller_Index extends Controller_Abstruct
{
	public $template = 'template';
	
	public function before() {
		parent::before();
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
		$this->template->content = View::forge('index/index');
	}
}