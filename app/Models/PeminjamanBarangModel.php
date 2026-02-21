<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanBarangModel extends Model
{
    protected $table      = 'peminjaman_barang';
    protected $primaryKey = 'peminjaman_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}