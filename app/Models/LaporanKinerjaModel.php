<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanKinerjaModel extends Model
{
    protected $table      = 'laporan_kinerja';
    protected $primaryKey = 'sks';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
