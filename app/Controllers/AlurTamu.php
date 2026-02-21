<?php

namespace App\Controllers;

use App\Models\AlurTamuModel;

class AlurTamu extends BaseController
{
    public function index()
    {
        $model = new AlurTamuModel();

        $data['rows'] = $model
            ->orderBy('alur_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/alur_tamu', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new AlurTamuModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/alur_tamu', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('alur_tamu'));
    }

    public function update($id)
    {
        $model = new AlurTamuModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/alur_tamu', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('alur_tamu'));
    }

    public function delete($id)
    {
        $model = new AlurTamuModel();
        $model->delete($id);

        return redirect()->to(base_url('alur_tamu'));
    }
}