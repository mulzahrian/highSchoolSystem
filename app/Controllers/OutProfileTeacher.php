<?php

namespace App\Controllers;

use App\Models\ProfileTeacherModel;

class OutProfileTeacher extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProfileTeacherModel();
    }

    public function index()
    {
        $data['teachers'] = $this->model
            ->orderBy('created_at', 'DESC')
            ->findAll();

        if (empty($data['teachers'])) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outprofileteacher', $data)
            . view('Layout/HomeFooter');
    }
}