<?php

namespace App\Controllers;

use App\Models\ZonaIntegrasiModel;

class OutZonaIntegrasi extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ZonaIntegrasiModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['zona'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['zona']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outzonaintegrasi', $data)
            . view('Layout/HomeFooter');
    }
}