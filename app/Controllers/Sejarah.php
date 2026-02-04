<?php

namespace App\Controllers;

use App\Models\ProfileHistoryModel;

class Sejarah extends BaseController
{
    public function index()
    {
        $model = new ProfileHistoryModel();

        $data['histories'] = $model
            ->orderBy('tahun', 'ASC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/sejarah', $data)
            . view('Layout/HomeFooter');
    }
}
