<?php

namespace App\Controllers;

use App\Models\LaporanKinerjaModel;

class LaporanKinerja extends BaseController
{
    public function index()
    {
        $model = new LaporanKinerjaModel();

        $data['rows'] = $model
            ->orderBy('sks', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/laporan_kinerja', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new LaporanKinerjaModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/laporan-kinerja', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('laporan-kinerja'));
    }

    public function update($id)
    {
        $model = new LaporanKinerjaModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/laporan-kinerja', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('laporan-kinerja'));
    }

    public function delete($id)
    {
        $model = new LaporanKinerjaModel();
        $model->delete($id);

        return redirect()->to(base_url('laporan-kinerja'));
    }
}
