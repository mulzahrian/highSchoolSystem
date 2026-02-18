<?php

namespace App\Models;

use CodeIgniter\Model;

class AgenPerubahanModel extends Model
{
    protected $table      = 'agen_perubahan';
    protected $primaryKey = 'agen_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
