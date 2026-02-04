<?php

namespace App\Controllers;

use App\Models\ProfileTeacherDetailModel;

class Pendidik extends BaseController
{
    public function index()
    {
        $model = new ProfileTeacherDetailModel();

        $data['pendidik'] = $model
            ->orderBy('name', 'ASC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/pendidik', $data)
            . view('Layout/HomeFooter');
    }
}
