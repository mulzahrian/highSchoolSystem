<?php

namespace App\Controllers;

use App\Models\MaklumatLayananModel;

class MaklumatLayanan extends BaseController
{
    public function index()
    {
        $model = new MaklumatLayananModel();

        $data['rows'] = $model
            ->orderBy('maklumat_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/maklumat_layanan', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new MaklumatLayananModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/maklumat_layanan', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('maklumat_layanan'));
    }

    public function update($id)
    {
        $model = new MaklumatLayananModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/maklumat_layanan', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('maklumat_layanan'));
    }

    public function delete($id)
    {
        $model = new MaklumatLayananModel();
        $model->delete($id);

        return redirect()->to(base_url('maklumat_layanan'));
    }
}