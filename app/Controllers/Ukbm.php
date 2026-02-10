<?php

namespace App\Controllers;

use App\Models\UkbmModel;

class Ukbm extends BaseController
{
    public function index()
    {
        $model = new UkbmModel();

        $data['rows'] = $model
            ->orderBy('ukbm_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/ukbm', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new UkbmModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/ukbm', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('ukbm'));
    }

    public function update($id)
    {
        $model = new UkbmModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'content'   => $this->request->getPost('content'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/ukbm', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('ukbm'));
    }

    public function delete($id)
    {
        $model = new UkbmModel();
        $model->delete($id);

        return redirect()->to(base_url('ukbm'));
    }
}
