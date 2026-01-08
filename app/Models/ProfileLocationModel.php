<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileLocationModel extends Model
{
    protected $table = 'profile_location';
    protected $primaryKey = 'location_id';
    protected $allowedFields = ['link'];
    protected $useTimestamps = true;
}
