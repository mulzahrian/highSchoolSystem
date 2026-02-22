<?php

namespace App\Controllers;

use App\Models\RelasiBelanjaModel;

class OutRelasiBelanja extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new RelasiBelanjaModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['relasi'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['relasi']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outrelasibelanja', $data)
            . view('Layout/HomeFooter');
    }
}