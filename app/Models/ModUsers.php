<?php

namespace App\Models;

use CodeIgniter\Model;

class ModUsers extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'users';
    protected $primaryKey = 'u_id';
    protected $returnType = 'array';
    protected $useTimestamps = true;
    protected $allowedFields = ['u_fname', 'u_lname', 'u_email', 'u_password', 'u_phone', 'company_website', 'company_name', 'job_title', 'u_date', 'u_updated', 'u_status', 'u_role', 'exhibitor_checkbox', 'presentation_title', 'presentation_checkbox1', 'presentation_checkbox2', 'presenter_description', 'what_brought_you', 'username', 'u_link', 'u_status'];
    protected $createdField = 'u_date';
    protected $updatedField = 'u_updated';
}
