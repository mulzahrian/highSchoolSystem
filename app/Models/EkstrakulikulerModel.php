<?php

namespace App\Models;

use CodeIgniter\Model;

class EkstrakulikulerModel extends Model
{
    protected $table      = 'ekstrakulikuler';
    protected $primaryKey = 'ekstrakulikuler_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
