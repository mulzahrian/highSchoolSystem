<?php

namespace App\Models;

use CodeIgniter\Model;

class AlurPenelitianModel extends Model
{
    protected $table      = 'alur_penelitian';
    protected $primaryKey = 'alur_penelitian_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}