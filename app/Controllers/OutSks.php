<?php

namespace App\Controllers;

use App\Models\SksModel;

class OutSks extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new SksModel();
    }

    // 🔥 LIST TABLE
    public function index()
    {
        $data['sks'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/outsks_list', $data)
            . view('Layout/HomeFooter');
    }

    // 🔥 DETAIL
    public function detail($id)
    {
        $data['sks'] = $this->model->find($id);

        if (!$data['sks']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outsks_detail', $data)
            . view('Layout/HomeFooter');
    }
}