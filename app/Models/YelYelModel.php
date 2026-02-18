<?php

namespace App\Models;

use CodeIgniter\Model;

class YelYelModel extends Model
{
    protected $table      = 'yel_yel';
    protected $primaryKey = 'yel_yel';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
