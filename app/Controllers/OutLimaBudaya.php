<?php

namespace App\Controllers;

use App\Models\LimaBudayaModel;

class OutLimaBudaya extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new LimaBudayaModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['budaya'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['budaya']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outlimabudaya', $data)
            . view('Layout/HomeFooter');
    }
}