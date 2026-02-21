<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

class OutArtikel extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ArtikelModel();
    }

    // LIST
    public function index()
    {
        $data['artikel'] = $this->model
            ->where('is_active', 1)
            ->orderBy('artikel_id', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outartikel', $data);
    }

    // DETAIL
    public function detail($id)
    {
        $data['artikel'] = $this->model->find($id);

        if (!$data['artikel']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outartikel_detail', $data);
    }
}