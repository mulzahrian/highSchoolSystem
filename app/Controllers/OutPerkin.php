<?php

namespace App\Controllers;

use App\Models\PerkinModel;

class OutPerkin extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PerkinModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['perkin'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['perkin']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outperkin', $data)
            . view('Layout/HomeFooter');
    }
}