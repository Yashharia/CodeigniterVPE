<?php

namespace App\Controllers;

use App\Models\ModPresentation;
use App\Models\ModSpeaker;
use App\Libraries\Upload;
use App\Models\boothModel;
use App\Models\ModAssociations;
use App\Models\ModBoothSLider;
use App\Models\ModCallToActions;

class AssociationController extends BaseController
{

    public function __construct()
    {
        $pager =  \Config\Services::pager();
    }


    public function addassociation()
    {
        echo view('templates/normal-header');
        echo view('forms/add-association');
        echo view('templates/footer');
        echo view('forms/repeater');
    }



    public function associates()
    {
        $db = db_connect();
        $associate = new ModAssociations($db);
        $data['all'] = $associate->getAssociation();
        $speaker = new ModSpeaker($db);
        $calltoaction = new ModCallToActions($db);


        // get all slider image and videos
        $data['allSpeakers'] = [];
        foreach ($data['all'] as $row) {
            $data['speaker'] = $speaker->getSpeakersAssociation($row->association_id);
            if ($data['speaker'] != '') {
                array_push($data['allSpeakers'], $data['speaker']);
                //print_r($data['speaker']);
            }
        }

        //get all buttons
        $data['allCallToActions'] = [];
        foreach ($data['all'] as $row) {
            $data['allbuttons'] = $calltoaction->getButton('association_id', $row->association_id);
            if ($data['allbuttons'] != '') {
                array_push($data['allCallToActions'], $data['allbuttons']);
                //print_r($data['speaker']);
            }
        }

        echo view('templates/normal-header');
        echo view('exhibitor/associates', $data);
        echo view('templates/footer');
    }


    public function newassociation()
    {
        helper(['form', 'url']);
        $myrequest = \Config\Services::request();
        $session = \Config\Services::session();
        $database = \Config\Database::connect();
        $speakersdb = $database->table('speakers');

        $speakerName =  $myrequest->getPost('speakerName');
        $calltoaction = $database->table('calltoactions');


        //call to actions
        $buttonName =  $myrequest->getPost('button_name');
        $buttonLink =  $myrequest->getPost('button_link');

        $assoication = new ModAssociations($database);
        $data['name'] = $myrequest->getPost('name');
        $data['category'] = $myrequest->getPost('category');

        $assoication->insert($data);
        $insert_id = $assoication->getInsertID();

        $finalArray = [];
        $calltoactionArray = [];
        for ($i = 0; $i < count($speakerName); $i++) {
            array_push($finalArray, ['full_name' => $speakerName[$i], 'association_id' => $insert_id]);
        }

        //adding call to actions 
        for ($i = 0; $i < count($buttonName); $i++) {
            array_push($calltoactionArray, ['name' => $buttonName[$i], 'link' => $buttonLink[$i],  'association_id' => $insert_id]);
        }



        $uploadcalltoaction = $speakersdb->insertBatch($finalArray);
        $calltoaction->insertBatch($calltoactionArray);

        print_r($calltoactionArray);
        return   print_r('test ' . $uploadcalltoaction);
    }
}
