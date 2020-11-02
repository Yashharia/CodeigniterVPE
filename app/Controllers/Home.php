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

	public function vpe_media_partner()
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
		$presentation = new ModPresentation();

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
		$database = \Config\Database::connect();
		$speakersdb = $database->table('speakers');

		$files = $this->request->getFileMultiple("speaker_headshots");
		$speakerNames =  $myrequest->getPost('speakerNames');
		$speakerJobTitles =  $myrequest->getPost('speaker_job_titles');




		$presentation = new ModPresentation();
		helper('text');
		$data['title'] = $myrequest->getPost('presentation-title');
		$data['presentation_category'] = $myrequest->getPost('presentation_category');
		$data['event_date'] = $myrequest->getPost('event_date');
		$data['preferred_time'] = $myrequest->getPost('preferred_time');
		$data['timezone'] = $myrequest->getPost('timezone');
		$data['description'] = $myrequest->getPost('description');
		$data['email_addresses'] =  $myrequest->getPost('email_address');
		$data['watch_presentation'] = $myrequest->getPost('watch_presentation');
		$data['presentation_image'] = $myrequest->getPost('presentation_image');
		$data['speaker_youtube_video'] = $myrequest->getPost('speaker_youtube_video');
		$data['conference_link'] = $myrequest->getPost('conference_link');
		$data['download_btn_show_hide'] = $myrequest->getPost('download_btn_show_hide');
		$data['u_id'] = $myrequest->getPost('u_id');
		$data['post_status_id'] = $myrequest->getPost('post_status_id');
		$data['category_id'] = $myrequest->getPost('category_id');

		$presentation->insert($data);
		$insert_id = $presentation->getInsertID();

		$finalArray = [];

		for ($i = 0; $i < count($files); $i++) {
			echo '<br>File Name' . $files[$i]->getName();
			echo '<br>Speaker Name' . $speakerNames[$i];
			echo '<br>Speaker Job Title' . $speakerJobTitles[$i];
			echo '<br>File Random Name' . $files[$i]->getRandomName();
			echo '<br>File Extension' . $files[$i]->getExtension();
			echo '<br> ------------------------';
			$files[$i]->move('./public/uploads', $files[$i]->getRandomName());
			array_push($finalArray, ['image' => $files[$i]->getRandomName(), 'full_name' => $speakerNames[$i], 'job_title' => $speakerJobTitles[$i], 'presentation_id' => $insert_id]);
		}

		$speakersdb->insertBatch($finalArray);
	}
}
