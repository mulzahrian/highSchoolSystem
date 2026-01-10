<?php

namespace App\Models;

use CodeIgniter\Model;

class KtspModel extends Model
{
    protected $table = 'ktsp_id';
    protected $primaryKey = 'ktsp_id';
    protected $allowedFields = [
        'title',
        'image',
        'content',
        'is_active'
    ];
    protected $useTimestamps = true;
}
