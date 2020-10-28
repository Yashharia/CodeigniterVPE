<?php

namespace App\Controllers;

use App\Models\ModPresentation;
use App\Libraries\Upload;


class Home extends BaseController
{
	public function template($template_name, $vars = array(), $return = FALSE)
	{
		if ($return) :
			$content  = $this->view('templates/header', $vars, $return);
			$content .= $this->view($template_name, $vars, $return);
			$content .= $this->view('templates/footer', $vars, $return);

			return $content;
		else :
			echo view('templates/normal-header', $vars);
			echo view($template_name, $vars);
			echo view('templates/footer', $vars);
		endif;
	}

	public function index()
	{
		$this->template('home');
	}

	public function antitrustguidelines()
	{
		$this->template('staticpages/antitrust-guidelines');
	}

	public function vpemediapartner()
	{
		$this->template('staticpages/vpe-media-partner');
	}

	public function faq()
	{
		$this->template('staticpages/faq');
	}

	public function partnershipinfo()
	{
		$this->template('staticpages/partnership-info');
	}

	public function currentpresentation()
	{
		$presentation = new ModPresentation();
		$allpresentation = $presentation->findAll();
		echo view('templates/normal-header');
		print_r($allpresentation);
		echo view('templates/footer');
	}

	public function addpresentation()
	{
		$this->template('forms/add-presentation');
		echo view('forms/repeater');
	}

	public function addexhibitor()
	{
		$this->template('forms/add-exhibitor');
		echo view('forms/repeater');
	}

	public function newpresentation()
	{
		helper(['form', 'url']);
		$myrequest = \Config\Services::request();
		$session = \Config\Services::session();





		$presentation = new ModPresentation();
		helper('text');
		$data['title'] = $myrequest->getPost('presentation-title');
		$data['presentation_category'] = $myrequest->getPost('presentation_category');
		$data['event_date'] = $myrequest->getPost('event_date');
		$data['preferred_time'] = $myrequest->getPost('preferred_time');
		$data['timezone'] = $myrequest->getPost('timezone');
		$data['description'] = $myrequest->getPost('description');
		$data['speaker_headshots'] = implode('||', $myrequest->getPost('speaker_headshots'));
		$data['speaker_full_names'] = implode('||', $myrequest->getPost('speaker_full_names'));
		$data['speaker_job_titles'] = implode('||', $myrequest->getPost('speaker_job_titles'));
		$data['email_addresses'] = implode('||', $myrequest->getPost('email_addresses'));
		$data['watch_presentation'] = $myrequest->getPost('watch_presentation');
		$data['presentation_image'] = $myrequest->getPost('presentation_image');
		$data['speaker_youtube_video'] = $myrequest->getPost('speaker_youtube_video');
		$data['exhibitor_button_name'] = $myrequest->getPost('exhibitor_button_name');
		$data['exhibitor_button_link'] = $myrequest->getPost('exhibitor_button_link');
		$data['conference_link'] = $myrequest->getPost('conference_link');
		$data['download_btn_show_hide'] = $myrequest->getPost('download_btn_show_hide');
		$data['u_id'] = $myrequest->getPost('u_id');
		$data['post_status_id'] = $myrequest->getPost('post_status_id');
		$data['category_id'] = $myrequest->getPost('category_id');

		$presentation->insert($data);
	}
}
