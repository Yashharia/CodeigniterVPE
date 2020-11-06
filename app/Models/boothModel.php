<?php

namespace App\Models;

use CodeIgniter\Model;

class boothModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'booths';
    protected $primaryKey = 'booth_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['booth_id', 'title', 'website', 'logo', 'description', 'banner', 'show_profile_image', 'profile_cover_image', 'conference_link', 'show_special_offer', 'special_offer_text', 'special_offer_validity', 'special_offer_link', 'special_offer_theme', 'click_here_text_only', 'status', 'exhibitor_plan', 'created_by', 'created_at'];
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    // get single row based on 1 condition






    public function getBooth($type)
    {
        $db = db_connect();

        $boothSliders = new ModBoothSLider($db);
        $calltoaction = new ModCallToActions($db);


        $booths = $this->db->table('booths');
        $data['all'] = $booths
            ->where('exhibitor_plan', $type)
            ->join('calltoactions', 'calltoactions.booth_id=booths.booth_id')
            ->groupBy('calltoactions.booth_id')
            ->get()
            ->getResult();


        // get all slider image and videos
        $data['sliders'] = [];
        foreach ($data['all'] as $row) {
            $data['slider'] = $boothSliders->getSlider($row->booth_id);
            if ($data['slider'] != '') {
                array_push($data['sliders'], $data['slider']);
                //print_r($data['speaker']);
            }
        }

        //get all buttons
        $data['allCallToActions'] = [];
        foreach ($data['all'] as $row) {
            $data['allbuttons'] = $calltoaction->getButton('booth_id', $row->booth_id);
            if ($data['allbuttons'] != '') {
                array_push($data['allCallToActions'], $data['allbuttons']);
                //print_r($data['speaker']);
            }
        }

        return $data;
    }
}
