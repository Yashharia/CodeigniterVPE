<?php

namespace App\Controllers;

use App\Models\ModPresentation;
use App\Models\ModSpeaker;
use App\Libraries\Upload;
use App\Models\boothModel;
use App\Models\ModBoothSLider;
use App\Models\ModCallToActions;

class ExhibitorController extends BaseController
{

    public function __construct()
    {
        $pager =  \Config\Services::pager();
    }

    public function exhibitor($type)
    {
        $db = db_connect();
        $booth = new boothModel($db);
        $data['all'] = $booth->getBooth($type);
        $boothModel = $booth->getBooth($type);

        $data['booth'] = [
            'booth' => $booth->paginate(6),
            'pager' => $booth->pager
        ];

        echo view('templates/normal-header');
        echo view('exhibitor/industry-exhibitor', $data);
        echo view('templates/footer');
    }
}
