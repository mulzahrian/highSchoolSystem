<?php

namespace App\Models;

use CodeIgniter\Model;

class MutasiSiswaModel extends Model
{
    protected $table      = 'mutasi_siswa';
    protected $primaryKey = 'mutasi_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}