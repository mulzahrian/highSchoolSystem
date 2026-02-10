<?php

namespace App\Models;

use CodeIgniter\Model;

class UkbmModel extends Model
{
    protected $table      = 'ukbm';
    protected $primaryKey = 'ukbm_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
