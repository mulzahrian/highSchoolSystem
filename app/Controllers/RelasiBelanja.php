<?php

namespace App\Controllers;

use App\Models\RelasiBelanjaModel;

class RelasiBelanja extends BaseController
{
    public function index()
    {
        $model = new RelasiBelanjaModel();

        $data['rows'] = $model
            ->orderBy('relasi_belanja_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/relasi_belanja', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new RelasiBelanjaModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/relasi-belanja', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('relasi-belanja'));
    }

    public function update($id)
    {
        $model = new RelasiBelanjaModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/relasi-belanja', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('relasi-belanja'));
    }

    public function delete($id)
    {
        $model = new RelasiBelanjaModel();
        $model->delete($id);

        return redirect()->to(base_url('relasi-belanja'));
    }
}
