<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoProfileModel extends Model
{
    protected $table = 'video_profile';
    protected $primaryKey = 'video_id';

    protected $allowedFields = [
        'url',
        'is_active'
    ];

    protected $useTimestamps = true;
}