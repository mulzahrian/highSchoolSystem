<?php

namespace App\Models;

use CodeIgniter\Model;

class PtmtModel extends Model
{
    protected $table      = 'ptmt';
    protected $primaryKey = 'ptmt_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
