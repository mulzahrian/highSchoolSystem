<?php

namespace App\Models;

use CodeIgniter\Model;

class SpeachHeadmasterModel extends Model
{
    protected $table = 'speach_headmaster';
    protected $primaryKey = 'speach_id';

    protected $allowedFields = [
        'photo',
        'speach',
        'is_active'
    ];

    protected $useTimestamps = true;
}