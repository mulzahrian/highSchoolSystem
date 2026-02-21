<?php

namespace App\Controllers;

use App\Models\AlurPenelitianModel;

class OutAlurPenelitian extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AlurPenelitianModel();
    }

    public function index()
    {
        // ambil data terbaru
        $data['alur'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outalur_penelitian', $data);
    }
}