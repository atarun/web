<?php
class Controller_Home extends Controller
{
	public function action_index() {
		var_dump("hoge");
		return Response::forge(View::forge('home/index'));
	}
}