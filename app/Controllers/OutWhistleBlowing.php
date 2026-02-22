<?php

namespace App\Controllers;

use App\Models\WhistleBlowingModel;

class OutWhistleBlowing extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new WhistleBlowingModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['wb'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['wb']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outwhistleblowing', $data)
            . view('Layout/HomeFooter');
    }
}