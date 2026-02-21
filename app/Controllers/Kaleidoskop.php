<?php

namespace App\Controllers;

use App\Models\KaleidoskopModel;

class Kaleidoskop extends BaseController
{
    public function index()
    {
        $model = new KaleidoskopModel();

        $data['rows'] = $model
            ->orderBy('Kaleidoskop_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/kaleidoskop', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new KaleidoskopModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/kaleidoskop', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('kaleidoskop'));
    }

    public function update($id)
    {
        $model = new KaleidoskopModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/kaleidoskop', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('kaleidoskop'));
    }

    public function delete($id)
    {
        $model = new KaleidoskopModel();
        $model->delete($id);

        return redirect()->to(base_url('kaleidoskop'));
    }
}