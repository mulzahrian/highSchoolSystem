<?php

namespace App\Controllers;

use App\Models\KtspModel;

class Kom extends BaseController
{
    public function index()
    {
        $model = new KtspModel();

        // Ambil data TERAKHIR berdasarkan created_at
        $data['kom'] = $model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first(); // cuma 1 data terakhir

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/kom', $data);
    }
}
