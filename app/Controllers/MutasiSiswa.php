<?php

namespace App\Controllers;

use App\Models\MutasiSiswaModel;

class MutasiSiswa extends BaseController
{
    public function index()
    {
        $model = new MutasiSiswaModel();

        $data['rows'] = $model
            ->orderBy('mutasi_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/mutasi_siswa', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new MutasiSiswaModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/mutasi_siswa', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('mutasi_siswa'));
    }

    public function update($id)
    {
        $model = new MutasiSiswaModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/mutasi_siswa', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('mutasi_siswa'));
    }

    public function delete($id)
    {
        $model = new MutasiSiswaModel();
        $model->delete($id);

        return redirect()->to(base_url('mutasi_siswa'));
    }
}