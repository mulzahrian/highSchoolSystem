<?php

namespace App\Models;

use CodeIgniter\Model;

class SurveyKepuasanModel extends Model
{
    protected $table      = 'survey_kepuasan';
    protected $primaryKey = 'survey_id';

    protected $allowedFields = [
        'header',
        'pdf',
        'is_active'
    ];

    protected $useTimestamps = true;
}