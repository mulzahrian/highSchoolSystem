<?php

namespace App\Controllers;

use App\Models\PpidModel;

class Ppid extends BaseController
{
    public function index()
    {
        $model = new PpidModel();

        $data['rows'] = $model
            ->orderBy('ppid_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/ppid', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PpidModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/ppid', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('ppid'));
    }

    public function update($id)
    {
        $model = new PpidModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/ppid', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('ppid'));
    }

    public function delete($id)
    {
        $model = new PpidModel();
        $model->delete($id);

        return redirect()->to(base_url('ppid'));
    }

    public function detail($id)
    {
        $model = new PpidModel();

        $data['ppid'] = $model
            ->where('ppid_id', $id)
            ->where('is_active', 1)
            ->first();

        if (!$data['ppid']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/ppid_detail', $data)
            . view('Layout/HomeFooter');
    }
}
