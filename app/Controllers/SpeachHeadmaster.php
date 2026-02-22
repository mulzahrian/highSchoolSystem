<?php

namespace App\Controllers;

use App\Models\SpeachHeadmasterModel;

class SpeachHeadmaster extends BaseController
{
    public function index()
    {
        $model = new SpeachHeadmasterModel();

        $data['speaches'] = $model
            ->orderBy('speach_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/speachHeadmaster', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new SpeachHeadmasterModel();

        $file = $this->request->getFile('photo');
        $fileName = $file->getRandomName();
        $file->move('uploads/', $fileName);

        $model->insert([
            'photo' => 'uploads/' . $fileName,
            'speach' => $this->request->getPost('speach'),
            'is_active' => 1
        ]);

        return redirect()->to(base_url('speach-headmaster'));
    }

    public function update($id)
    {
        $model = new SpeachHeadmasterModel();

        $data = [
            'speach' => $this->request->getPost('speach'),
            'is_active' => $this->request->getPost('is_active')
        ];

        $file = $this->request->getFile('photo');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('uploads/', $fileName);
            $data['photo'] = 'uploads/' . $fileName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('speach-headmaster'));
    }

    public function delete($id)
    {
        $model = new SpeachHeadmasterModel();
        $model->delete($id);

        return redirect()->to(base_url('speach-headmaster'));
    }
}