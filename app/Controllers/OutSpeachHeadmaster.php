<?php

namespace App\Controllers;

use App\Models\SpeachHeadmasterModel;

class OutSpeachHeadmaster extends BaseController
{
    public function index()
    {
        $model = new SpeachHeadmasterModel();

        // ambil pidato aktif terakhir
        $data['speach'] = $model
            ->where('is_active', 1)
            ->orderBy('speach_id', 'DESC')
            ->first();

        return view('Layout/HomeHeader')
            . view('PageOut/out_speach_headmaster', $data)
            . view('Layout/HomeFooter');
    }
}