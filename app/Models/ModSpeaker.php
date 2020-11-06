<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ModSpeaker extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'speakers';
    protected $primaryKey = 'speaker_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['speaker_id', 'full_name', 'image', 'job_title', 'presentaiton_id'];
    protected $db;

    // get single row based on 1 condition

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getSpeakers($presentationid)
    {

        $presentations = $this->db->table('speakers');
        $post = $presentations
            ->where('presentation_id', $presentationid)
            ->get()
            ->getResult();

        return $post;
    }

    public function getSpeakersAssociation($presentationid)
    {

        $presentations = $this->db->table('speakers');
        $post = $presentations
            ->where('association_id', $presentationid)
            ->get()
            ->getResult();

        return $post;
    }
}
