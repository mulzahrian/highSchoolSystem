<?php

namespace App\Controllers;

use App\Models\AlurTamuModel;

class OutAlurTamu extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AlurTamuModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru
        $data['alur'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['alur']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outalurtamu', $data)
            . view('Layout/HomeFooter');
    }
}