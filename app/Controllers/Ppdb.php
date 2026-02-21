<?php

namespace App\Controllers;

use App\Models\PpdbModel;

class Ppdb extends BaseController
{
    public function index()
    {
        $model = new PpdbModel();

        $data['rows'] = $model
            ->orderBy('ppdb_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/ppdb', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PpdbModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/ppdb', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('ppdb'));
    }

    public function update($id)
    {
        $model = new PpdbModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/ppdb', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('ppdb'));
    }

    public function delete($id)
    {
        $model = new PpdbModel();
        $model->delete($id);

        return redirect()->to(base_url('ppdb'));
    }
}