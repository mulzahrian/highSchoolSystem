<?php

namespace App\Controllers;

use App\Models\WhistleBlowingModel;

class WhistleBlowing extends BaseController
{
    public function index()
    {
        $model = new WhistleBlowingModel();

        $data['rows'] = $model
            ->orderBy('w_blowing_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/whistle_blowing', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new WhistleBlowingModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/whistle_blowing', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('whistle_blowing'));
    }

    public function update($id)
    {
        $model = new WhistleBlowingModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/whistle_blowing', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('whistle_blowing'));
    }

    public function delete($id)
    {
        $model = new WhistleBlowingModel();
        $model->delete($id);

        return redirect()->to(base_url('whistle_blowing'));
    }
}
