<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileOrganizationStructureModel extends Model
{
    protected $table = 'profile_organization_structure';
    protected $primaryKey = 'organization_id';
    protected $allowedFields = ['image'];
    protected $useTimestamps = true;
}
