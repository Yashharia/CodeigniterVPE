<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ModPresentation extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'presentations';
    protected $primaryKey = 'p_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['p_id', 'title', 'presentation_category', 'event_date', 'preferred_time', 'timezone', 'event_type', 'description', 'speaker_headshots', 'speaker_full_names', 'speaker_job_titles', 'email_addresses', 'watch_presentation', 'presentation_image', 'speaker_youtube_video', 'exhibitor_button_name', 'exhibitor_button_link', 'conference_link', 'download_btn_show_hide', 'u_id', 'post_status_id', 'category_id'];
    protected $createdField = 'created_date';
    protected $updatedField = 'p_updated';
    protected $db;

    // get single row based on 1 condition

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getPresentation($type)
    {
        if ($type == "current") {
            $colCond = "event_date >=";
        } elseif ($type == "past") {
            $colCond = "event_date <=";
        }
        $todaysDate = date("Y-m-d");
        $presentations = $this->db->table('presentations');
        $post = $presentations
            ->where($colCond, $todaysDate)
            ->join('speakers', 'presentation_id=p_id')
            ->groupBy('p_id')
            ->get()
            ->getResult();


        return $post;
    }
}
