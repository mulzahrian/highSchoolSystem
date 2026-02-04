<?php

namespace App\Controllers;

use App\Models\ProfileTeacherModel;

class ProfilGuru extends BaseController
{
    public function index()
    {
        $model = new ProfileTeacherModel();

        $data['teachers'] = $model
            ->orderBy('organization_id', 'ASC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/profil_guru', $data)
            . view('Layout/HomeFooter');
    }
}
