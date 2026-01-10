<?php

namespace App\Models;

use CodeIgniter\Model;

class PlanStrategicModel extends Model
{
    protected $table = 'plan_strategic';
    protected $primaryKey = 'plan_id';
    protected $allowedFields = [
        'year',
        'content',
        'thumbnail',
        'is_active'
    ];
    protected $useTimestamps = true;
}
