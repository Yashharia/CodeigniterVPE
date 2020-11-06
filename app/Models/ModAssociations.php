<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class ModAssociations extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'associations';
    protected $primaryKey = 'association_id';
    protected $returnType = 'array';
    protected $allowedFields = ['association_id', 'name', 'category'];
    protected $db;

    // get single row based on 1 condition

    public function __construct(ConnectionInterface &$db)
    {
        $this->db = &$db;
    }

    public function getAssociation()
    {

        $associations = $this->db->table('associations');
        $post = $associations
            ->select('*')
            ->get()
            ->getResult();

        return $post;
    }
}
