<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ModCallToActions extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'calltoactions';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'link', 'presentation_id', 'booth_id'];
    protected $db;

    // get single row based on 1 condition

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getButton($type, $id)
    {

        $presentations = $this->db->table('calltoactions');
        $post = $presentations
            ->where($type, $id)
            ->get()
            ->getResult();

        return $post;
    }
}
