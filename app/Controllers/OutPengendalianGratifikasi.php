<?php

namespace App\Controllers;

use App\Models\PengendalianGratifikasiModel;

class OutPengendalianGratifikasi extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PengendalianGratifikasiModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['gratifikasi'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['gratifikasi']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outpengendaliangratifikasi', $data)
            . view('Layout/HomeFooter');
    }
}