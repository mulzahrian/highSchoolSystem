<?php

namespace App\Controllers;

use App\Models\MutasiSiswaModel;

class OutMutasiSiswa extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new MutasiSiswaModel();
    }

    public function index()
    {
        // Ambil data terbaru
        $data['mutasi'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['mutasi']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outmutasi', $data)
            . view('Layout/HomeFooter');
    }
}