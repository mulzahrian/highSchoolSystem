<?php

namespace App\Controllers;

use App\Models\PengendalianInternModel;

class OutPengendalianIntern extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PengendalianInternModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['pengendalian'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['pengendalian']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outpengendalianintern', $data)
            . view('Layout/HomeFooter');
    }
}