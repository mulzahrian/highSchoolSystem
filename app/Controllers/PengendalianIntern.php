<?php

namespace App\Controllers;

use App\Models\PengendalianInternModel;

class PengendalianIntern extends BaseController
{
    public function index()
    {
        $model = new PengendalianInternModel();

        $data['rows'] = $model
            ->orderBy('pengendalian_intern_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/pengendalian_intern', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PengendalianInternModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/pengendalian_intern', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('pengendalian_intern'));
    }

    public function update($id)
    {
        $model = new PengendalianInternModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/pengendalian_intern', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('pengendalian_intern'));
    }

    public function delete($id)
    {
        $model = new PengendalianInternModel();
        $model->delete($id);

        return redirect()->to(base_url('pengendalian_intern'));
    }
}
