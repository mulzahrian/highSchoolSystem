<?php

namespace App\Models;

use CodeIgniter\Model;

class PengendalianGratifikasiModel extends Model
{
    protected $table      = 'pengendalian_gratifikasi';
    protected $primaryKey = 'pengendalian_intern_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
