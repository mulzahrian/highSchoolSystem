<?php

namespace App\Controllers;

use App\Models\AnnouncementModel;

class Pengumuman extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AnnouncementModel();
    }

    // LIST
    public function index()
    {
        $data['pengumuman'] = $this->model
            ->where('is_active', 1)
            ->orderBy('year', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/pengumuman', $data);

    }

    // DETAIL
    public function detail($id)
    {
        $data['pengumuman'] = $this->model->find($id);

        if (!$data['pengumuman']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/pengumuman_detail', $data);
    }
}
