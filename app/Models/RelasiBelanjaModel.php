<?php

namespace App\Models;

use CodeIgniter\Model;

class RelasiBelanjaModel extends Model
{
    protected $table      = 'relasi_belanja';
    protected $primaryKey = 'relasi_belanja_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
