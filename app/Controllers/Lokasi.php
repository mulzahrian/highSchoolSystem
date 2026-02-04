<?php

namespace App\Controllers;

use App\Models\ProfileLocationModel;

class Lokasi extends BaseController
{
    public function index()
    {
        $model = new ProfileLocationModel();

        // biasanya cuma 1 lokasi, ambil yang terbaru
        $data['lokasi'] = $model
            ->orderBy('location_id', 'DESC')
            ->first();

        return view('Layout/HomeHeader')
            . view('PageOut/lokasi', $data)
            . view('Layout/HomeFooter');
    }
}
