<?php

namespace App\Models;

use CodeIgniter\Model;

class KaleidoskopModel extends Model
{
    protected $table      = 'Kaleidoskop';
    protected $primaryKey = 'Kaleidoskop_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}