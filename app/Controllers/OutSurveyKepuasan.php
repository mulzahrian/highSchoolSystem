<?php

namespace App\Controllers;

use App\Models\SurveyKepuasanModel;

class OutSurveyKepuasan extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new SurveyKepuasanModel();
    }

    // LIST
    public function index()
    {
        $data['survey'] = $this->model
            ->where('is_active', 1)
            ->orderBy('created_at', 'DESC')
            ->findAll();

        return view('Layout/HomeHeader')
            . view('PageOut/outsurvey', $data)
            . view('Layout/HomeFooter');
    }

    // DETAIL
    public function detail($id)
    {
        $data['survey'] = $this->model->find($id);

        if (!$data['survey']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outsurvey_detail', $data)
            . view('Layout/HomeFooter');
    }
}