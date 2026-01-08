<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileTeacherDetailModel extends Model
{
    protected $table = 'profile_teacher_detail';
    protected $primaryKey = 'teacher_id';
    protected $allowedFields = [
        'image',
        'name',
        'education',
        'sex',
        'birth_date',
        'level',
        'role'
    ];
    protected $useTimestamps = true;
}
