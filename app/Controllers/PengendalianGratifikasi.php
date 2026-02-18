<?php

namespace App\Controllers;

use App\Models\PengendalianGratifikasiModel;

class PengendalianGratifikasi extends BaseController
{
    public function index()
    {
        $model = new PengendalianGratifikasiModel();

        $data['rows'] = $model
            ->orderBy('pengendalian_intern_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/pengendalian_gratifikasi', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PengendalianGratifikasiModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/pengendalian_gratifikasi', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('pengendalian_gratifikasi'));
    }

    public function update($id)
    {
        $model = new PengendalianGratifikasiModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/pengendalian_gratifikasi', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('pengendalian_gratifikasi'));
    }

    public function delete($id)
    {
        $model = new PengendalianGratifikasiModel();
        $model->delete($id);

        return redirect()->to(base_url('pengendalian_gratifikasi'));
    }
}
