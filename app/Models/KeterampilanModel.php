<?php

namespace App\Models;

use CodeIgniter\Model;

class KeterampilanModel extends Model
{
    protected $table      = 'keterampilan';
    protected $primaryKey = 'keterampilan_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
