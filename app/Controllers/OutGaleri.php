<?php

namespace App\Controllers;

use App\Models\GaleriModel;

class OutGaleri extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new GaleriModel();
    }

    public function index()
    {
        $data['galeri'] = $this->model
            ->where('is_active', 1)
            ->orderBy('galeri_id', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outgaleri', $data);
    }
}