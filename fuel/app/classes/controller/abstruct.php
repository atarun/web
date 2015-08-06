<?php
use Fuel\Core\Controller_Hybrid;

class Controller_Abstruct extends Controller_Hybrid
{
	protected $view;
	
	public function before() {
		parent::before();
		$uri = Uri::string();
		if (strpos($uri, '/') === false) {
			$uri .= '/index';
		}
		$this->view = View::forge($uri);
		
		$this->template->uri = $uri;
		$this->template->title = "タイトル";
	}
	
	public function after($response) {
		$this->template->content = $this->view;
		
		$response = parent::after($response);
		return $response;
	}
	
	public function action_index() {
// 		$this->template->content = View::forge('layout/layout');
	}
}