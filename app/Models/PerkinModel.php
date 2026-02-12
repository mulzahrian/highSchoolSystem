<?php

namespace App\Models;

use CodeIgniter\Model;

class PerkinModel extends Model
{
    protected $table      = 'perkin';
    protected $primaryKey = 'perkin_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
