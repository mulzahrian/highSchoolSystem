<?php

namespace App\Models;

use CodeIgniter\Model;

class AlurTamuModel extends Model
{
    protected $table      = 'alur_tamu';
    protected $primaryKey = 'alur_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}