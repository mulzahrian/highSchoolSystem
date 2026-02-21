<?php

namespace App\Models;

use CodeIgniter\Model;

class MaklumatLayananModel extends Model
{
    protected $table      = 'maklumat_layanan';
    protected $primaryKey = 'maklumat_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}