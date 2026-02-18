<?php

namespace App\Models;

use CodeIgniter\Model;

class TracatModel extends Model
{
    protected $table      = 'tracat';
    protected $primaryKey = 'tracat_id';

    protected $allowedFields = [
        'header',
        'image',
        'url',
        'is_active'
    ];

    protected $useTimestamps = true;
}
