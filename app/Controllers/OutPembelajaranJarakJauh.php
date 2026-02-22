<?php

namespace App\Controllers;

use App\Models\PembelajaranJarakJauhModel;

class OutPembelajaranJarakJauh extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PembelajaranJarakJauhModel();
    }

    // 🔥 LIST
    public function index()
    {
        $data['pjj'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/outpjj_list', $data)
            . view('Layout/HomeFooter');
    }

    // 🔥 DETAIL
    public function detail($id)
    {
        $data['pjj'] = $this->model->find($id);

        if (!$data['pjj']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outpjj_detail', $data)
            . view('Layout/HomeFooter');
    }
}