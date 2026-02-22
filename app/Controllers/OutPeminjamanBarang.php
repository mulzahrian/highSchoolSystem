<?php

namespace App\Controllers;

use App\Models\PeminjamanBarangModel;

class OutPeminjamanBarang extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PeminjamanBarangModel();
    }

    public function index()
    {
        // Ambil data terbaru
        $data['peminjaman'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['peminjaman']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outpeminjaman', $data)
            . view('Layout/HomeFooter');
    }
}