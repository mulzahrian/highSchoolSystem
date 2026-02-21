<?php

namespace App\Controllers;

use App\Models\AlurPenelitianModel;

class AlurPenelitian extends BaseController
{
    public function index()
    {
        $model = new AlurPenelitianModel();

        $data['rows'] = $model
            ->orderBy('alur_penelitian_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/alur_penelitian', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new AlurPenelitianModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/alur_penelitian', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('alur_penelitian'));
    }

    public function update($id)
    {
        $model = new AlurPenelitianModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/alur_penelitian', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('alur_penelitian'));
    }

    public function delete($id)
    {
        $model = new AlurPenelitianModel();
        $model->delete($id);

        return redirect()->to(base_url('alur_penelitian'));
    }
}