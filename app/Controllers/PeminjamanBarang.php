<?php

namespace App\Controllers;

use App\Models\PeminjamanBarangModel;

class PeminjamanBarang extends BaseController
{
    public function index()
    {
        $model = new PeminjamanBarangModel();

        $data['rows'] = $model
            ->orderBy('peminjaman_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/peminjaman_barang', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PeminjamanBarangModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/peminjaman_barang', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('peminjaman_barang'));
    }

    public function update($id)
    {
        $model = new PeminjamanBarangModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/peminjaman_barang', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('peminjaman_barang'));
    }

    public function delete($id)
    {
        $model = new PeminjamanBarangModel();
        $model->delete($id);

        return redirect()->to(base_url('peminjaman_barang'));
    }
}