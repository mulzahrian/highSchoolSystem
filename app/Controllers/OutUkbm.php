<?php

namespace App\Controllers;

use App\Models\UkbmModel;

class OutUkbm extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UkbmModel();
    }

    // 🔥 LIST
    public function index()
    {
        $data['ukbm'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/outukbm_list', $data)
            . view('Layout/HomeFooter');
    }

    // 🔥 DETAIL
    public function detail($id)
    {
        $data['ukbm'] = $this->model->find($id);

        if (!$data['ukbm']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outukbm_detail', $data)
            . view('Layout/HomeFooter');
    }
}