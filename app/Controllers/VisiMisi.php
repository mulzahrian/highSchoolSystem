<?php

namespace App\Controllers;

use App\Models\ProfileVisionMissionModel;

class VisiMisi extends BaseController
{
    public function index()
    {
        $model = new ProfileVisionMissionModel();

        $data['visi'] = $model->where('type', 'visi')->first();
        $data['misi'] = $model->where('type', 'misi')->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/visi_misi', $data)
            . view('Layout/HomeFooter');
    }
}
