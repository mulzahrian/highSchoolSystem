<?php

namespace App\Models;

use CodeIgniter\Model;

class PpidModel extends Model
{
    protected $table      = 'ppid';
    protected $primaryKey = 'ppid_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
