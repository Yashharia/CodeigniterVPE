<?php

namespace App\Controllers;

use App\Models\ModPresentation;
use App\Models\ModSpeaker;
use App\Libraries\Upload;
use App\Models\boothModel;

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
		$database = \Config\Database::connect();
		$speakersdb = $database->table('speakers');

		$files = $this->request->getFileMultiple("speaker_headshots");
		$speakerNames =  $myrequest->getPost('speakerNames');
		$speakerJobTitles =  $myrequest->getPost('speaker_job_titles');

		$presentation = new ModPresentation($database);
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
			$randomName = $files[$i]->getRandomName();
			$files[$i]->move('./public/uploads', $randomName);
			array_push($finalArray, ['image' => $randomName, 'full_name' => $speakerNames[$i], 'job_title' => $speakerJobTitles[$i], 'presentation_id' => $insert_id]);
		}

		$speakersdb->insertBatch($finalArray);
		return redirect('/current-presentation');
	}

	public function newbooth()
	{
		helper(['form', 'url']);
		$myrequest = \Config\Services::request();
		$session = \Config\Services::session();
		$database = \Config\Database::connect();
		$calltoaction = $database->table('calltoactions');
		$boothslider = $database->table('boothslider');

		// slider image and videos
		$marketingImage = $this->request->getFileMultiple("marketing_image");
		$videoLink =  $myrequest->getPost('video_link');

		//call to actions
		$buttonName =  $myrequest->getPost('button_name');
		$buttonLink =  $myrequest->getPost('button_link');


		$booth = new boothModel();
		helper('text');
		$data['title'] = $myrequest->getPost('company-name');
		$data['website'] = $myrequest->getPost('website-link');
		$data['exhibitor_plan'] = $myrequest->getPost('exhibitor_plan');

		$companyLogo = $myrequest->getFile('company-logo');
		$companyLogo_rename = $companyLogo->getRandomName();
		$companyLogo->move('./public/uploads', $companyLogo_rename);
		$data['logo'] =  $companyLogo_rename;

		$data['description'] = $myrequest->getPost('company-description');

		$profile_cover_image = $myrequest->getFile('profile-cover-image');
		if ($profile_cover_image != '') {
			$profile_cover_image_rename = $profile_cover_image->getRandomName();
			$profile_cover_image->move('./public/uploads', $profile_cover_image_rename);
			$data['profile_cover_image'] =  $profile_cover_image_rename;
		}

		$data['conference_link'] = $myrequest->getPost('conference_link');

		$data['show_profile_image'] = $myrequest->getPost('show_profile_image');
		$data['show_special_offer'] = $myrequest->getPost('show_special_offer');
		$data['special_offer_text'] =  $myrequest->getPost('special_offer_text');
		$data['special_offer_validity'] = $myrequest->getPost('special_offer_validity');
		$data['special_offer_link'] = $myrequest->getPost('special_offer_link');
		$data['click_here_text_only'] = $myrequest->getPost('click_here_text_only');

		$data['status'] = "pending";
		$data["created_by"] = $session->get('u_id');

		$data['conference_link'] = $myrequest->getPost('conference_link');


		$booth->insert($data);
		$insert_id = $booth->getInsertID();

		$boothSliderArray = [];
		$calltoactionArray = [];

		//adding slider imagews and videos
		for ($i = 0; $i < count($marketingImage); $i++) {
			if ($marketingImage[$i] != '') {
				$imageRandomName = $marketingImage[$i]->getRandomName();
				$marketingImage[$i]->move('./public/uploads', $imageRandomName);
			} else {
				$marketingImage[$i] = '';
				$imageRandomName = '';
			}
			array_push($boothSliderArray, ['image' => $imageRandomName, 'video' => $videoLink[$i], 'booth_id' => $insert_id]);
		}


		//adding call to actions 
		for ($i = 0; $i < count($buttonName); $i++) {
			array_push($calltoactionArray, ['name' => $buttonName[$i], 'link' => $buttonLink[$i],  'booth_id' => $insert_id]);
		}

		$calltoaction->insertBatch($calltoactionArray);
		$boothslider->insertBatch($boothSliderArray);

		return redirect('industry-exhibitor');
	}

	public function addAssociation()
	{
	}
}
