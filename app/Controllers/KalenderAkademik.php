<?php

namespace App\Controllers;

use App\Models\AcademicCalenderModel;

class KalenderAkademik extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new AcademicCalenderModel();
    }

    // LIST
    public function index()
    {
        $data['kalender'] = $this->model
            ->where('is_active', 1)
            ->orderBy('year', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/kalender_akademik', $data);
    }

    // DETAIL
    public function detail($id)
    {
        $data['kalender'] = $this->model->find($id);

        if (!$data['kalender']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
        return view('Layout/HomeHeader')
            . view('Layout/HomeFooter')
            . view('PageOut/kalender_akademik_detail', $data);
    }
}
