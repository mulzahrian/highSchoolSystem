<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnouncementModel extends Model
{
    protected $table = 'announcement';
    protected $primaryKey = 'announcement_id';
    protected $allowedFields = [
        'year',
        'content',
        'thumbnail',
        'is_active'
    ];
    protected $useTimestamps = true;
}
