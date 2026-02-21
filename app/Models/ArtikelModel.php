<?php

namespace App\Models;

use CodeIgniter\Model;

class ArtikelModel extends Model
{
    protected $table      = 'artikel';
    protected $primaryKey = 'artikel_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}