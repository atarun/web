<?php
use Fuel\Core\Controller_Hybrid;

class Controller_Home extends Controller_Hybrid
{
	public function action_index() {
		var_dump("hoge");
		return Response::forge(View::forge('home/index'));
	}
}