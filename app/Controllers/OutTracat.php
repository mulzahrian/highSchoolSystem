<?php

namespace App\Controllers;

use App\Models\TracatModel;

class OutTracat extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new TracatModel();
    }

    public function index()
    {
        $data['tracat'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/outtracat', $data)
            . view('Layout/HomeFooter');
    }
}