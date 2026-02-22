<?php

namespace App\Controllers;

use App\Models\LayananPublicModel;

class LayananPublic extends BaseController
{
    public function index()
    {
        $model = new LayananPublicModel();

        $data['rows'] = $model
            ->orderBy('layanan_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/layanan_public', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new LayananPublicModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/layanan_public', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('layanan-public'));
    }

    public function update($id)
    {
        $model = new LayananPublicModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/layanan_public', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('layanan-public'));
    }

    public function delete($id)
    {
        $model = new LayananPublicModel();
        $model->delete($id);

        return redirect()->to(base_url('layanan-public'));
    }

    public function detail($id)
    {
        $model = new LayananPublicModel();

        $data['layanan'] = $model
            ->where('layanan_id', $id)
            ->where('is_active', 1)
            ->first();

        if (!$data['layanan']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/outlayanan_public_detail', $data)
            . view('Layout/HomeFooter');
    }
}
