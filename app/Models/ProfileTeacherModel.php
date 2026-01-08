<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileTeacherModel extends Model
{
    protected $table = 'profile_teacher';
    protected $primaryKey = 'organization_id';
    protected $allowedFields = ['image', 'name', 'role', 'detail'];
    protected $useTimestamps = true;
}
