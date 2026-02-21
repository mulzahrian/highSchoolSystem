<?php

namespace App\Controllers;

use App\Models\MaklumatLayananModel;

class OutMaklumatLayanan extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new MaklumatLayananModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru
        $data['maklumat'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['maklumat']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outmaklumat', $data)
            . view('Layout/HomeFooter');
    }
}