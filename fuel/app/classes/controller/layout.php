<?php
use Fuel\Core\Controller_Hybrid;

class Controller_Layout extends Controller_Hybrid
{
	public function action_index() {
		$thie->template->title = "タイトル";
		$this->template->content = View::forge('layout');
	}
}