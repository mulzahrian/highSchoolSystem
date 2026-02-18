<?php

namespace App\Models;

use CodeIgniter\Model;

class WhistleBlowingModel extends Model
{
    protected $table      = 'whistle_blowing';
    protected $primaryKey = 'w_blowing_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
