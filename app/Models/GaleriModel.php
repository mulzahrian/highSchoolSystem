<?php

namespace App\Models;

use CodeIgniter\Model;

class GaleriModel extends Model
{
    protected $table      = 'galeri';
    protected $primaryKey = 'galeri_id';

    protected $allowedFields = [
        'header',
        'image',
        'is_active'
    ];

    protected $useTimestamps = true;
}