<?php

namespace App\Controllers;

use App\Models\KaleidoskopModel;

class OutKaleidoskop extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new KaleidoskopModel();
    }

    // LIST
    public function index()
    {
        $data['kaleidoskop'] = $this->model
            ->where('is_active', 1)
            ->orderBy('Kaleidoskop_id', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outkaleidoskop', $data);
    }

    // DETAIL
    public function detail($id)
    {
        $data['kaleidoskop'] = $this->model->find($id);

        if (!$data['kaleidoskop']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outkaleidoskop_detail', $data);
    }
}