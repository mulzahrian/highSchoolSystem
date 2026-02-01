<?php

namespace App\Models;

use CodeIgniter\Model;

class OpeningModel extends Model
{
    protected $table      = 'opening';
    protected $primaryKey = 'opening_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
