<?php

namespace App\Controllers;

use App\Models\Site_Model;


class Admin extends BaseController
{


	public function index()
	{
		return redirect()->to(site_url('/presentation'));
	}

	public function createpresentation()
	{
		helper('form');

		$myvalues = $this->validate(
			[
				'title' => 'required',
				'description' => 'required',
				'date' => 'required',
				'time' => 'required',
			]
		);
		if (!$myvalues) {
			$this->index();
		} else {
			$myrequest = \Config\Services::request();
			$session = \Config\Services::session();

			$presentation = new Site_Model();
			helper('text');
			$data['title'] = $myrequest->getPost('title');
			$data['description'] = $myrequest->getPost('description');
			$data['date'] = $myrequest->getPost('date');
			$data['time'] = $myrequest->getPost('time');
			$data['u_id'] = $myrequest->getPost('u_id');


			$message = "Presentation added";
			$checkAlreadyUser = $presentation->where('u_id', $data['u_email'])->findAll();
			if (count($checkAlreadyUser) > 0) {
				$session->setFlashdata('message', 'Adding value Limit exceeded.');
				return redirect()->to(site_url('user/newuser'));
				//echo 'the email is already exist.';
			} else {
				$myNewUser = $presentation->insert($data);
			}
			//die();


		}
	}
}
