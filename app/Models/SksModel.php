<?php

namespace App\Models;

use CodeIgniter\Model;

class SksModel extends Model
{
    protected $table      = 'sks';
    protected $primaryKey = 'sks';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
