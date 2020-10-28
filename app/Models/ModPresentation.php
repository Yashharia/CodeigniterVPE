<?php

namespace App\Models;

use CodeIgniter\Model;

class ModPresentation extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'presentation';
    protected $primaryKey = 'p_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['p_id', 'title', 'presentation_category', 'event_date', 'preferred_time', 'timezone', 'description', 'speaker_headshots', 'speaker_full_names', 'speaker_job_titles', 'email_addresses', 'watch_presentation', 'presentation_image', 'speaker_youtube_video', 'exhibitor_button_name', 'exhibitor_button_link', 'conference_link', 'download_btn_show_hide', 'u_id', 'post_status_id', 'category_id'];
    protected $createdField = 'created_date';
    protected $updatedField = 'p_updated';
    // get single row based on 1 condition

}
