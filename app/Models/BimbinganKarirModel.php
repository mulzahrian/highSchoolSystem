<?php

namespace App\Models;

use CodeIgniter\Model;

class BimbinganKarirModel extends Model
{
    protected $table = 'bimbingan_karir';
    protected $primaryKey = 'bimbingan_id';
    protected $allowedFields = [
        'title',
        'image',
        'content',
        'is_active'
    ];
    protected $useTimestamps = true;
}
