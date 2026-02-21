<?php

namespace App\Models;

use CodeIgniter\Model;

class PpdbModel extends Model
{
    protected $table      = 'ppdb';
    protected $primaryKey = 'ppdb_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}