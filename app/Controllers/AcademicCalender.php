<?php

namespace App\Controllers;

use App\Models\AcademicCalenderModel;

class AcademicCalender extends BaseController
{
    public function index()
    {
        $model = new AcademicCalenderModel();

        $data['calenders'] = $model
            ->orderBy('year', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/academicCalender', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new AcademicCalenderModel();
        $file  = $this->request->getFile('image');

        $image = null;
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $image = $file->getRandomName();
            $file->move('uploads/academic-calender', $image);
        }

        $model->insert([
            'year'      => $this->request->getPost('year'),
            'image'     => $image,
            'is_active' => $this->request->getPost('is_active') ?? 1
        ]);

        return redirect()->to(base_url('academic-calender'));
    }

    public function delete($id)
    {
        $model = new AcademicCalenderModel();
        $data  = $model->find($id);

        if ($data && $data['image']) {
            $path = 'uploads/academic-calender/' . $data['image'];
            if (file_exists($path)) unlink($path);
        }

        $model->delete($id);

        return redirect()->to(base_url('academic-calender'));
    }
}
