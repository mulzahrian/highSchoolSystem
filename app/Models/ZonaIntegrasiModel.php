<?php

namespace App\Models;

use CodeIgniter\Model;

class ZonaIntegrasiModel extends Model
{
    protected $table      = 'zona_integrasi';
    protected $primaryKey = 'zona_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
