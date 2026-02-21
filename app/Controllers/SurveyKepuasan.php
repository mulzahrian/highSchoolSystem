<?php

namespace App\Controllers;

use App\Models\SurveyKepuasanModel;

class SurveyKepuasan extends BaseController
{
    public function index()
    {
        $model = new SurveyKepuasanModel();

        $data['rows'] = $model
            ->orderBy('survey_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/survey_kepuasan', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new SurveyKepuasanModel();

        $pdf = $this->request->getFile('pdf');
        $pdfName = $pdf->getRandomName();
        $pdf->move('uploads/survey_kepuasan', $pdfName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'pdf'       => $pdfName,
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('survey_kepuasan'));
    }

    public function update($id)
    {
        $model = new SurveyKepuasanModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $pdf = $this->request->getFile('pdf');
        if ($pdf && $pdf->isValid()) {
            $pdfName = $pdf->getRandomName();
            $pdf->move('uploads/survey_kepuasan', $pdfName);
            $data['pdf'] = $pdfName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('survey_kepuasan'));
    }

    public function delete($id)
    {
        $model = new SurveyKepuasanModel();
        $model->delete($id);

        return redirect()->to(base_url('survey_kepuasan'));
    }
}