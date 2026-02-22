<?php

namespace App\Controllers;

use App\Models\YelYelModel;

class OutYelYel extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new YelYelModel();
    }

    public function index()
    {
        // Ambil 1 data terbaru yang aktif
        $data['yel'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['yel']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outyelyel', $data)
            . view('Layout/HomeFooter');
    }
}