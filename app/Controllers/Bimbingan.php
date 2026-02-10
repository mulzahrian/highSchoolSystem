<?php

namespace App\Controllers;

use App\Models\BimbinganKarirModel;

class Bimbingan extends BaseController
{
    public function index()
    {
        $model = new BimbinganKarirModel();

        // Ambil 1 data TERAKHIR
        $data['bimbingan'] = $model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/bimbingan', $data);
    }
}
