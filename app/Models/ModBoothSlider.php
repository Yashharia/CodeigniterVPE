<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ModBoothSLider extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'boothslider';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['image', 'video', 'booth_id'];
    protected $db;

    // get single row based on 1 condition

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getSlider($id)
    {

        $boothslider = $this->db->table('boothslider');
        $post = $boothslider
            ->where('booth_id', $id)
            ->get()
            ->getResult();

        return $post;
    }
}
