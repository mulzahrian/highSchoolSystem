<?php

namespace App\Controllers;

use App\Models\TracatModel;

class Tracat extends BaseController
{
    public function index()
    {
        $model = new TracatModel();

        $data['rows'] = $model
            ->orderBy('tracat_id', 'DESC')
            ->findAll();

        return view('Layout/header')
            . view('Layout/sidebar')
            . view('Page/tracat', $data)
            . view('Layout/footer');
    }

    public function add()
    {
        $model = new TracatModel();

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move('uploads/tracat', $imageName);

        $model->insert([
            'header'    => $this->request->getPost('header'),
            'image'     => $imageName,
            'url'       => $this->request->getPost('url'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ]);

        return redirect()->to(base_url('tracat'));
    }

    public function update($id)
    {
        $model = new TracatModel();

        $data = [
            'header'    => $this->request->getPost('header'),
            'url'       => $this->request->getPost('url'),
            'is_active' => $this->request->getPost('is_active') ? 1 : 0,
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $imageName = $image->getRandomName();
            $image->move('uploads/tracat', $imageName);
            $data['image'] = $imageName;
        }

        $model->update($id, $data);

        return redirect()->to(base_url('tracat'));
    }

    public function delete($id)
    {
        $model = new TracatModel();
        $model->delete($id);

        return redirect()->to(base_url('tracat'));
    }
}
