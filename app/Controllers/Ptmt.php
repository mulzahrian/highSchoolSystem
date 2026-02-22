<?php

namespace App\Controllers;

use App\Models\PtmtModel;

class Ptmt extends BaseController
{
    public function index()
    {
        $model = new PtmtModel();

        $data['rows'] = $model
            ->orderBy('ptmt_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/ptmt', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new PtmtModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/ptmt', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active'),
        ]);

        return redirect()->to(base_url('ptmt'));
    }

    public function update($id)
    {
        $model = new PtmtModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active'),
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/ptmt', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('ptmt'));
    }

    public function delete($id)
    {
        $model = new PtmtModel();
        $model->delete($id);

        return redirect()->to(base_url('ptmt'));
    }

    public function detail($id)
    {
        $model = new PtmtModel();

        $data['ptmt'] = $model
            ->where('ptmt_id', $id)
            ->where('is_active', 1)
            ->first();

        if (!$data['ptmt']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('Layout/HomeHeader')
            . view('PageOut/ptmt_detail', $data)
            . view('Layout/HomeFooter');
    }
}
