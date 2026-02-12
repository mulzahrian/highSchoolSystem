<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananMadrasahModel extends Model
{
    protected $table      = 'layanan_madrasah';
    protected $primaryKey = 'layanan_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
