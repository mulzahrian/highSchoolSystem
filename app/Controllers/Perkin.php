<?php

namespace App\Controllers;

use App\Models\PerkinModel;

class Perkin extends BaseController
{
    public function index()
    {
        $model = new PerkinModel();

        $data['rows'] = $model
            ->orderBy('perkin_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/perkin', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PerkinModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/perkin', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('perkin'));
    }

    public function update($id)
    {
        $model = new PerkinModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/perkin', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('perkin'));
    }

    public function delete($id)
    {
        $model = new PerkinModel();
        $model->delete($id);

        return redirect()->to(base_url('perkin'));
    }
}
