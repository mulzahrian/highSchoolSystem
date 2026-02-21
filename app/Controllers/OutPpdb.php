<?php

namespace App\Controllers;

use App\Models\PpdbModel;

class OutPpdb extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new PpdbModel();
    }

    public function index()
    {
        $data['ppdb'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->first();

        if (!$data['ppdb']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outppdb', $data)
            . view('Layout/HomeFooter');
    }
}