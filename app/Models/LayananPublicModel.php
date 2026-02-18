<?php

namespace App\Models;

use CodeIgniter\Model;

class LayananPublicModel extends Model
{
    protected $table      = 'layanan_public';
    protected $primaryKey = 'layanan_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
