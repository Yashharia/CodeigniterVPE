<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		$checkUser = $session->get('u_id');
		//return view('welcome_message');
		if ($checkUser) {
			echo 'welcome: ' . $session->get('u_name');
		} else {
			echo 'redirect here...';
		}
	}
}
