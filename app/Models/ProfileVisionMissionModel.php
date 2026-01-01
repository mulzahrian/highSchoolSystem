<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileVisionMissionModel extends Model
{
    protected $table = 'profile_vision_mission';
    protected $primaryKey = 'id';
    protected $allowedFields = ['type', 'content'];
    protected $useTimestamps = true;
}
