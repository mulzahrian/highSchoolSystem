<?php

namespace App\Models;

use CodeIgniter\Model;

class PembelajaranJarakJauhModel extends Model
{
    protected $table      = 'pembelajaran_jarak_jauh';
    protected $primaryKey = 'pembelajaran_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}
