<?php

namespace App\Controllers;

use App\Models\DownloadModel;

class OutDownload extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new DownloadModel();
    }

    // LIST
    public function index()
    {
        $data['download'] = $this->model
            ->where('is_active', 1)
            ->orderBy('agen_id', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outdownload', $data);
    }

    // DETAIL
    public function detail($id)
    {
        $data['download'] = $this->model->find($id);

        if (!$data['download']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/outdownload_detail', $data);
    }
}