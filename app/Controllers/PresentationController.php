<?php

namespace App\Controllers;

use App\Models\ModPresentation;
use App\Models\ModSpeaker;
use App\Libraries\Upload;
use App\Models\boothModel;

class PresentationController extends BaseController
{
    public function currentpresentation()
    {
        $db = db_connect();
        $presentation = new ModPresentation($db);
        $data['all'] = $presentation->getPresentation('current');

        $speaker = new ModSpeaker($db);

        $data['allSpeakers'] = [];
        foreach ($data['all'] as $row) {
            $data['speaker'] = $speaker->getSpeakers($row->p_id);
            if ($data['speaker'] != '') {
                array_push($data['allSpeakers'], $data['speaker']);
                //print_r($data['speaker']);
            }
        }

        echo view('templates/normal-header');
        echo view('presentation/current-presentation', $data);

        echo '<pre>';
        //print_r($data['all']);
        echo '</pre>';


        echo view('templates/footer');
    }

    public function pastpresentation()
    {
        $db = db_connect();
        $presentation = new ModPresentation($db);
        $data['all'] = $presentation->getPresentation('past');

        $speaker = new ModSpeaker($db);

        $data['allSpeakers'] = [];
        foreach ($data['all'] as $row) {
            $data['speaker'] = $speaker->getSpeakers($row->p_id);
            if ($data['speaker'] != '') {
                array_push($data['allSpeakers'], $data['speaker']);
                //print_r($data['speaker']);
            }
        }

        echo view('templates/normal-header');
        echo view('presentation/current-presentation', $data);
        echo view('templates/footer');
    }
}
