<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileHistoryModel extends Model
{
    protected $table = 'profile_history';
    protected $primaryKey = 'history_id';
    protected $allowedFields = ['image', 'history'];
    protected $useTimestamps = true;
}
