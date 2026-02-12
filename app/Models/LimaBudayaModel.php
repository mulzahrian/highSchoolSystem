<?php

namespace App\Models;

use CodeIgniter\Model;

class LimaBudayaModel extends Model
{
    protected $table      = 'lima_budaya';
    protected $primaryKey = 'lima_id';

    protected $allowedFields = [
        'header',
        'image',
        'is_active'
    ];

    protected $useTimestamps = true;
}
