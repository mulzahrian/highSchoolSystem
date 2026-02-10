<?php

namespace App\Controllers;

use App\Models\SksModel;

class Sks extends BaseController
{
    public function index()
    {
        $model = new SksModel();

        $data['rows'] = $model
            ->orderBy('sks', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/sks', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new SksModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/sks', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active'),
        ]);

        return redirect()->to(base_url('sks'));
    }

    public function update($id)
    {
        $model = new SksModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active'),
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/sks', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('sks'));
    }

    public function delete($id)
    {
        $model = new SksModel();
        $model->delete($id);

        return redirect()->to(base_url('sks'));
    }
}
