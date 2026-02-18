<?php

namespace App\Models;

use CodeIgniter\Model;

class PengendalianInternModel extends Model
{
    protected $table      = 'pengendalian_intern';
    protected $primaryKey = 'pengendalian_intern_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}
