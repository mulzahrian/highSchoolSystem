<?php

namespace App\Models;

use CodeIgniter\Model;

class AcademicCalenderModel extends Model
{
    protected $table = 'academic_calender';
    protected $primaryKey = 'academic_calender';
    protected $allowedFields = [
        'year',
        'image',
        'is_active'
    ];
    protected $useTimestamps = true;
}
