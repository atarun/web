<?php

class Controller_Home extends Controller_Abstruct
{
	public function before() {
		parent::before();
	}
	
	public function after($response) {
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
	}
}