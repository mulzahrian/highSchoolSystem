<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileInfrastructureModel extends Model
{
    protected $table = 'profile_infrastructure';
    protected $primaryKey = 'infrastructure_id';
    protected $allowedFields = ['image', 'header', 'detail'];
    protected $useTimestamps = true;
}
