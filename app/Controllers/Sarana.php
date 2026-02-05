<?php

namespace App\Controllers;

use App\Models\ProfileTeacherDetailModel;

class Sarana extends BaseController
{
    public function index()
    {
        $model = new ProfileTeacherDetailModel();

        $data['pendidik'] = $model
            ->orderBy('name', 'ASC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/sarana_prasarana', $data)
            . view('Layout/HomeFooter');
    }
}
