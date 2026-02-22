<?php

namespace App\Controllers;

use App\Models\LaporanKinerjaModel;

class OutLaporanKinerja extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new LaporanKinerjaModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['laporan'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['laporan']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outlaporankinerja', $data)
            . view('Layout/HomeFooter');
    }
}