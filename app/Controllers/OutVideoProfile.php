<?php

namespace App\Controllers;

use App\Models\VideoProfileModel;

class OutVideoProfile extends BaseController
{
    public function index()
    {
        $model = new VideoProfileModel();

        // ambil video aktif terbaru
        $data['video'] = $model
            ->where('is_active', 1)
            ->orderBy('video_id', 'DESC')
            ->first();

        return view('Layout/HomeHeader')
            . view('PageOut/out_video_profile', $data)
            . view('Layout/HomeFooter');
    }
}