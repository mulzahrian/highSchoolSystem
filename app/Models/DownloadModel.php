<?php

namespace App\Models;

use CodeIgniter\Model;

class DownloadModel extends Model
{
    protected $table      = 'download';
    protected $primaryKey = 'agen_id';

    protected $allowedFields = [
        'header',
        'image',
        'content',
        'is_active'
    ];

    protected $useTimestamps = true;
}